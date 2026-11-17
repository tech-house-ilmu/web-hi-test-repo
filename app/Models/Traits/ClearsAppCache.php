<?php

namespace App\Models\Traits;

use Illuminate\Support\Facades\Cache;

trait ClearsAppCache
{
    public static function bootClearsAppCache(): void
    {
        static::saved(function () {
            try {
                Cache::flush();
            } catch (\Throwable $e) {
                // ignore
            }
        });

        static::deleted(function () {
            try {
                Cache::flush();
            } catch (\Throwable $e) {
                // ignore
            }
        });
    }
}
