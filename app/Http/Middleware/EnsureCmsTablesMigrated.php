<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Schema;
use Symfony\Component\HttpFoundation\Response;

class EnsureCmsTablesMigrated
{
    private static bool $checkedInProcess = false;

    public function handle(Request $request, Closure $next): Response
    {
        if (!self::$checkedInProcess) {
            self::$checkedInProcess = true;

            try {
                $alreadyMigrated = Cache::get('cms_tables_migrated_v1', false);

                if (!$alreadyMigrated) {
                    $checkTables = [
                        'home_heroes',
                        'home_impacts',
                        'collaboration_types',
                        'collaboration_partners',
                        'collaboration_documentations',
                        'event_histories',
                        'about_organizations',
                    ];

                    $needsMigration = false;
                    foreach ($checkTables as $t) {
                        if (!Schema::hasTable($t)) {
                            $needsMigration = true;
                            break;
                        }
                    }

                    if (!$needsMigration && (!Schema::hasColumn('articles', 'is_featured') || !Schema::hasColumn('events', 'show_on_home'))) {
                        $needsMigration = true;
                    }

                    if ($needsMigration) {
                        Artisan::call('migrate', ['--force' => true]);
                        if (class_exists('Database\\Seeders\\CmsContentSeeder')) {
                            Artisan::call('db:seed', [
                                '--class' => 'Database\\Seeders\\CmsContentSeeder',
                                '--force' => true,
                            ]);
                        }
                    }

                    // Backfill nulls for articles and events so queries never fail
                    if (Schema::hasTable('articles') && Schema::hasColumn('articles', 'is_published')) {
                        \Illuminate\Support\Facades\DB::table('articles')
                            ->whereNull('is_published')
                            ->update(['is_published' => 1]);
                        \Illuminate\Support\Facades\DB::table('articles')
                            ->whereNull('is_featured')
                            ->update(['is_featured' => 0]);
                        \Illuminate\Support\Facades\DB::table('articles')
                            ->whereNull('sort_order')
                            ->update(['sort_order' => 0]);
                    }

                    Cache::forever('cms_tables_migrated_v1', true);
                }
            } catch (\Throwable $e) {
                // Allow request to continue
            }
        }

        return $next($request);
    }
}
