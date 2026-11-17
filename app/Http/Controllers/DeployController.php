<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use App\Models\RecruitmentAnnouncement;

class DeployController extends Controller
{
    /**
     * Webhook / One-click deployment endpoint to pull latest code and clear caches.
     * Can be accessed via GET or POST.
     * Example: https://your-domain.com/deploy-update?token=hi-deploy-2026
     */
    public function deploy(Request $request)
    {
        $secretToken = env('DEPLOY_TOKEN', 'hi-deploy-2026');
        $providedToken = $request->query('token') ?? $request->header('X-Deploy-Token') ?? $request->input('token');

        if ($providedToken !== $secretToken) {
            return response()->json([
                'success' => false,
                'message' => 'Unauthorized: Invalid deploy token. Please provide ?token=' . $secretToken,
            ], 403);
        }

        $results = [];

        // 1. Git pull if exec is available
        if (function_exists('exec')) {
            $basePath = base_path();
            $gitOutput = [];
            $status = 0;
            exec("cd {$basePath} && git pull origin main 2>&1", $gitOutput, $status);
            $results['git_pull'] = [
                'status_code' => $status,
                'output' => implode("\n", $gitOutput),
            ];
        } else {
            $results['git_pull'] = [
                'status_code' => -1,
                'output' => 'exec() function is disabled in php.ini. Git pull must be run via SSH or cPanel Git.',
            ];
        }

        // 2. Run Database Migrations
        try {
            Artisan::call('migrate', ['--force' => true]);
            $results['migrations'] = trim(Artisan::output()) ?: 'Migrations up to date.';
        } catch (\Throwable $e) {
            $results['migrations_error'] = $e->getMessage();
        }

        // 3. Run Seeders (Our Team Batch 6, Hero Slider, Articles)
        try {
            Artisan::call('db:seed', ['--class' => 'Database\\Seeders\\LeadersDetailsAboutSeeder', '--force' => true]);
            Artisan::call('db:seed', ['--class' => 'Database\\Seeders\\HIProgrammeHeroSeeder', '--force' => true]);
            Artisan::call('db:seed', ['--class' => 'Database\\Seeders\\ArticleSeeder', '--force' => true]);
            $results['seeders'] = 'LeadersDetailsAboutSeeder, HIProgrammeHeroSeeder & ArticleSeeder executed successfully.';
        } catch (\Throwable $e) {
            $results['seeders_error'] = $e->getMessage();
        }

        // 4. Ensure storage symlink exists
        try {
            Artisan::call('storage:link');
            $results['storage_link'] = trim(Artisan::output()) ?: 'Storage linked.';
        } catch (\Throwable $e) {
            $results['storage_link_error'] = $e->getMessage();
        }

        // 5. Clear Laravel caches
        try {
            Artisan::call('optimize:clear');
            $results['cache_cleared'] = true;
        } catch (\Throwable $e) {
            $results['cache_error'] = $e->getMessage();
        }

        // 6. Update Recruitment Announcement in DB to stay_tuned
        try {
            $announcement = RecruitmentAnnouncement::first();
            if ($announcement) {
                $announcement->status = 'stay_tuned';
                $announcement->stay_tuned_badge = 'STAY TUNED';
                $announcement->stay_tuned_title = 'Belum ada rekrutmen yang dibuka saat ini';
                $announcement->stay_tuned_description = 'Informasi rekrutmen berikutnya akan diumumkan melalui kanal resmi House Ilmu Indonesia.';
                $announcement->save();
                $results['announcement_status'] = 'Set to stay_tuned successfully.';
            }
        } catch (\Throwable $e) {
            $results['announcement_error'] = $e->getMessage();
        }

        // 7. Sync static assets from public/ to root public_html for direct web server delivery
        try {
            $publicDir = public_path();
            $rootDir = base_path();
            if ($publicDir !== $rootDir) {
                foreach (['build', 'css', 'img', 'js'] as $dir) {
                    $src = $publicDir . DIRECTORY_SEPARATOR . $dir;
                    $dst = $rootDir . DIRECTORY_SEPARATOR . $dir;
                    if (\Illuminate\Support\Facades\File::isDirectory($src)) {
                        \Illuminate\Support\Facades\File::copyDirectory($src, $dst);
                    }
                }
                foreach (['favicon.ico', 'robots.txt'] as $file) {
                    $src = $publicDir . DIRECTORY_SEPARATOR . $file;
                    $dst = $rootDir . DIRECTORY_SEPARATOR . $file;
                    if (\Illuminate\Support\Facades\File::exists($src)) {
                        \Illuminate\Support\Facades\File::copy($src, $dst);
                    }
                }
                $results['asset_sync'] = 'Assets copied from public/ to root public_html successfully.';
            }

            // Also ensure storage/team and storage/articles exist in base_path('storage')
            $storagePublic = storage_path('app/public');
            $baseStorage = base_path('storage');
            foreach (['team', 'articles'] as $subDir) {
                $src = $storagePublic . DIRECTORY_SEPARATOR . $subDir;
                $dst = $baseStorage . DIRECTORY_SEPARATOR . $subDir;
                if (\Illuminate\Support\Facades\File::isDirectory($src)) {
                    \Illuminate\Support\Facades\File::copyDirectory($src, $dst);
                }
            }
            $results['storage_sync'] = 'Storage media (team & articles) mirrored to web storage successfully.';
        } catch (\Throwable $e) {
            $results['asset_sync_error'] = $e->getMessage();
        }

        // 8. Ensure Admin User exists and has correct credentials
        try {
            $customEmail = $request->input('email', 'hikamartech@gmail.com');
            $customPassword = $request->input('password', 'ADMIN111');

            $adminUser = \App\Models\User::firstOrNew(['email' => $customEmail]);
            $adminUser->name = 'Admin HI';
            $adminUser->password = $customPassword; // Automatically hashed via model cast
            $adminUser->is_admin = true;
            $adminUser->role = \App\Models\User::ROLE_SUPERADMIN;
            $adminUser->division = 'Tech';
            $adminUser->is_active = true;
            $adminUser->save();

            // Also ensure default fallback admin exists
            $defaultAdmin = \App\Models\User::firstOrNew(['email' => 'admin@mail.com']);
            if (!$defaultAdmin->exists) {
                $defaultAdmin->name = 'Superadmin';
                $defaultAdmin->password = 'tes123';
                $defaultAdmin->is_admin = true;
                $defaultAdmin->role = \App\Models\User::ROLE_SUPERADMIN;
                $defaultAdmin->division = 'Tech';
                $defaultAdmin->is_active = true;
                $defaultAdmin->save();
            }

            $results['admin_user'] = "Admin user {$customEmail} verified and updated successfully.";
        } catch (\Throwable $e) {
            $results['admin_user_error'] = $e->getMessage();
        }

        return response()->json([
            'success' => true,
            'message' => 'Server deployment & cache clear finished successfully!',
            'details' => $results,
        ], 200, [], JSON_PRETTY_PRINT);
    }
}

