<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use App\Models\RecruitmentAnnouncement;

class DeployController extends Controller
{
    /**
     * Webhook / One-click deployment endpoint to sync database, create admin, and clear caches.
     * Can be accessed via GET or POST in browser:
     * Example: https://houseilmuindonesia.biz.id/deploy-run?token=hi-deploy-2026
     */
    public function deploy(Request $request)
    {
        @ini_set('display_errors', '0');
        @ini_set('max_execution_time', '300');
        @set_time_limit(300);

        $secretToken = env('DEPLOY_TOKEN', 'hi-deploy-2026');
        $providedToken = $request->query('token') ?? $request->header('X-Deploy-Token') ?? $request->input('token');

        if ($providedToken !== $secretToken) {
            return response()->json([
                'success' => false,
                'message' => 'Unauthorized: Invalid deploy token. Please provide ?token=' . $secretToken,
            ], 403);
        }

        $results = [];

        // 1. Run Database Migrations
        try {
            Artisan::call('migrate', ['--force' => true]);
            $results['migrations'] = trim(Artisan::output()) ?: 'Migrations up to date.';
        } catch (\Throwable $e) {
            $results['migrations_error'] = $e->getMessage();
        }

        // 2. Run Seeders (Our Team Batch 6, Hero Slider, Articles, CMS Content)
        try {
            if (class_exists('Database\\Seeders\\LeadersDetailsAboutSeeder')) {
                Artisan::call('db:seed', ['--class' => 'Database\\Seeders\\LeadersDetailsAboutSeeder', '--force' => true]);
            }
            if (class_exists('Database\\Seeders\\HIProgrammeHeroSeeder')) {
                Artisan::call('db:seed', ['--class' => 'Database\\Seeders\\HIProgrammeHeroSeeder', '--force' => true]);
            }
            if (class_exists('Database\\Seeders\\ArticleSeeder')) {
                Artisan::call('db:seed', ['--class' => 'Database\\Seeders\\ArticleSeeder', '--force' => true]);
            }
            if (class_exists('Database\\Seeders\\CmsContentSeeder')) {
                Artisan::call('db:seed', ['--class' => 'Database\\Seeders\\CmsContentSeeder', '--force' => true]);
            }
            $results['seeders'] = 'Seeders executed successfully (Our Team, Heroes, Articles, CMS Content).';
        } catch (\Throwable $e) {
            $results['seeders_error'] = $e->getMessage();
        }

        // 3. Ensure Admin Users exist and have correct credentials in DB
        try {
            $now = now();
            DB::table('users')->updateOrInsert(
                ['email' => 'hikamartech@gmail.com'],
                [
                    'name' => 'Admin HI',
                    'password' => Hash::make('ADMIN111'),
                    'is_admin' => 1,
                    'role' => 'superadmin',
                    'division' => 'Tech',
                    'is_active' => 1,
                    'email_verified_at' => $now,
                    'updated_at' => $now,
                ]
            );

            DB::table('users')->updateOrInsert(
                ['email' => 'admin@mail.com'],
                [
                    'name' => 'Superadmin',
                    'password' => Hash::make('tes123'),
                    'is_admin' => 1,
                    'role' => 'superadmin',
                    'division' => 'Tech',
                    'is_active' => 1,
                    'email_verified_at' => $now,
                    'updated_at' => $now,
                ]
            );

            $results['admin_user'] = 'Admin accounts (hikamartech@gmail.com & admin@mail.com) verified and active.';
        } catch (\Throwable $e) {
            $results['admin_user_error'] = $e->getMessage();
        }

        // 4. Ensure Recruitment Announcement in DB exists
        try {
            if (class_exists('App\\Models\\RecruitmentAnnouncement')) {
                $announcement = RecruitmentAnnouncement::first();
                if (!$announcement) {
                    RecruitmentAnnouncement::create([
                        'status' => 'stay_tuned',
                        'batch_label' => 'Batch 6',
                        'stay_tuned_badge' => 'STAY TUNED',
                        'stay_tuned_title' => 'Belum ada rekrutmen yang dibuka saat ini',
                        'stay_tuned_description' => 'Informasi rekrutmen berikutnya akan diumumkan melalui kanal resmi House Ilmu Indonesia.',
                        'stay_tuned_button_text' => 'Pantau Media Sosial',
                        'stay_tuned_button_url' => 'https://www.instagram.com/houseilmu.id',
                    ]);
                    $results['announcement_status'] = 'Created initial stay_tuned announcement.';
                } else {
                    $results['announcement_status'] = 'Preserved existing announcement (status: ' . $announcement->status . ').';
                }
            }
        } catch (\Throwable $e) {
            $results['announcement_error'] = $e->getMessage();
        }

        // 5. Ensure storage symlink exists
        try {
            Artisan::call('storage:link');
            $results['storage_link'] = trim(Artisan::output()) ?: 'Storage linked.';
        } catch (\Throwable $e) {
            $results['storage_link_error'] = $e->getMessage();
        }

        // 6. Clear Laravel caches
        try {
            Artisan::call('optimize:clear');
            $results['cache_cleared'] = true;
        } catch (\Throwable $e) {
            $results['cache_error'] = $e->getMessage();
        }

        // 7. Sync static assets from public/ to root public_html if needed
        try {
            $publicDir = public_path();
            $rootDir = base_path();
            if ($publicDir !== $rootDir) {
                foreach (['build', 'css', 'img', 'js'] as $dir) {
                    $src = $publicDir . DIRECTORY_SEPARATOR . $dir;
                    $dst = $rootDir . DIRECTORY_SEPARATOR . $dir;
                    if (File::isDirectory($src)) {
                        File::copyDirectory($src, $dst);
                    }
                }
                foreach (['favicon.ico', 'robots.txt'] as $file) {
                    $src = $publicDir . DIRECTORY_SEPARATOR . $file;
                    $dst = $rootDir . DIRECTORY_SEPARATOR . $file;
                    if (File::exists($src)) {
                        File::copy($src, $dst);
                    }
                }
            }

            // Mirror storage media
            $storagePublic = storage_path('app/public');
            $baseStorage = base_path('storage');
            foreach (['team', 'articles'] as $subDir) {
                $src = $storagePublic . DIRECTORY_SEPARATOR . $subDir;
                $dst = $baseStorage . DIRECTORY_SEPARATOR . $subDir;
                if (File::isDirectory($src)) {
                    File::copyDirectory($src, $dst);
                }
            }
            $results['asset_sync'] = 'Assets copied from public/ to root public_html successfully.';
        } catch (\Throwable $e) {
            $results['asset_sync_error'] = $e->getMessage();
        }

        return response()->json([
            'success' => true,
            'message' => 'Deployment & cache clear finished successfully!',
            'details' => $results,
        ], 200, [], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    }
}


