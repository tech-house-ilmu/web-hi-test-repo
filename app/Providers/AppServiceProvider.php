<?php

namespace App\Providers;

use App\Models\Comment;
use App\Services\SimpleCaptcha;
use Filament\Forms\Components\FileUpload;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        if ($this->app->environment('production')) {
            URL::forceScheme('https');
        }

        // Global support for JPEG, PNG, WEBP, and HEIC across all FileUpload components
        FileUpload::configureUsing(function (FileUpload $component) {
            $component
                ->acceptedFileTypes([
                    'image/jpeg',
                    'image/png',
                    'image/webp',
                    'image/heic',
                    'image/heif',
                    'image/heic-sequence',
                    'image/heif-sequence',
                    'image/*',
                ])
                ->saveUploadedFileUsing(function (FileUpload $component, $file) {
                    $disk = $component->getDisk();
                    $directory = $component->getDirectory();
                    $visibility = $component->getVisibility();

                    $ext = strtolower($file->getClientOriginalExtension() ?: pathinfo($file->getFilename(), PATHINFO_EXTENSION));

                    // Convert HEIC / HEIF to JPEG if Imagick extension is loaded for universal browser support
                    if (in_array($ext, ['heic', 'heif']) && extension_loaded('imagick')) {
                        try {
                            $imagick = new \Imagick();
                            $imagick->readImage($file->getRealPath());
                            $imagick->setImageFormat('jpeg');
                            $imagick->setImageCompressionQuality(90);

                            $newFilename = pathinfo($file->hashName(), PATHINFO_FILENAME) . '.jpg';
                            $targetPath = ($directory ? rtrim($directory, '/') . '/' : '') . $newFilename;

                            $disk->put($targetPath, $imagick->getImageBlob(), $visibility);
                            $imagick->clear();
                            $imagick->destroy();

                            return $targetPath;
                        } catch (\Throwable $e) {
                            // Fallback to storing original if conversion fails
                        }
                    }

                    return $disk->putFile($directory, $file, $visibility);
                });
        });

        View::composer('partials.comments', function ($view) {
            $pageSlug = url()->current();
            $comments = Cache::remember("comments_{$pageSlug}", 60, function () use ($pageSlug) {
                return Comment::where('page_slug', $pageSlug)
                    ->whereNull('parent_id')
                    ->with('replies')
                    ->latest()
                    ->take(10)
                    ->get();
            });
            SimpleCaptcha::generate();
            $view->with(compact('comments', 'pageSlug'));
        });
    }
}
