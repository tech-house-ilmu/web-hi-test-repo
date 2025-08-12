<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default filesystem disk that should be used
    | by the framework. The "local" disk, as well as a variety of cloud
    | based disks are available to your application for file storage.
    |
    */

    'default' => env('FILESYSTEM_DISK', 'local'),

    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | Below you may configure as many filesystem disks as necessary, and you
    | may even configure multiple disks for the same driver. Examples for
    | most supported storage drivers are configured here for reference.
    |
    | Supported drivers: "local", "ftp", "sftp", "s3"
    |
    */

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app/private'),
            'serve' => true,
            'throw' => false,
        ],

        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => env('APP_URL').'storage',
            'visibility' => 'public',
            'throw' => false,
        ],

        // Disk khusus untuk testimoni alumni
        'testimoni' => [
            'driver' => 'local',
            'root' => storage_path('app/public/testimoni-alumni'),
            'url' => env('APP_URL').'/storage/testimoni-alumni',
            'visibility' => 'public',
            'throw' => false,
        ],

        // Disk untuk uploads umum
        'uploads' => [
            'driver' => 'local',
            'root' => storage_path('app/public/uploads'),
            'url' => env('APP_URL').'/storage/uploads',
            'visibility' => 'public',
            'throw' => false,
        ],

        // Disk untuk media/gambar
        'media' => [
            'driver' => 'local',
            'root' => storage_path('app/public/media'),
            'url' => env('APP_URL').'/storage/media',
            'visibility' => 'public',
            'throw' => false,
        ],

        // Disk untuk dokumen
        'documents' => [
            'driver' => 'local',
            'root' => storage_path('app/public/documents'),
            'url' => env('APP_URL').'/storage/documents',
            'visibility' => 'public',
            'throw' => false,
        ],

        's3' => [
            'driver' => 's3',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
            'url' => env('AWS_URL'),
            'endpoint' => env('AWS_ENDPOINT'),
            'use_path_style_endpoint' => env('AWS_USE_PATH_STYLE_ENDPOINT', false),
            'throw' => false,
        ],

        // Disk untuk temporary files
        'temp' => [
            'driver' => 'local',
            'root' => storage_path('app/temp'),
            'visibility' => 'private',
            'throw' => false,
        ],

        // Disk untuk backup files
        'backup' => [
            'driver' => 'local',
            'root' => storage_path('app/backup'),
            'visibility' => 'private',
            'throw' => false,
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Symbolic Links
    |--------------------------------------------------------------------------
    |
    | Here you may configure the symbolic links that will be created when the
    | `storage:link` Artisan command is executed. The array keys should be
    | the locations of the links and the values should be their targets.
    |
    */

    'links' => [
        public_path('storage') => storage_path('app/public'),
        public_path('media') => storage_path('app/public/media'),
        public_path('uploads') => storage_path('app/public/uploads'),
        public_path('documents') => storage_path('app/public/documents'),
    ],

];