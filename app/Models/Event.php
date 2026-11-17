<?php

namespace App\Models;

use App\Models\Traits\ClearsAppCache;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory, ClearsAppCache;

    protected $guarded = [];

    /**
     * @var array
     */
    protected $casts = [
        // Otomatis ubah kolom JSON 'images' menjadi array PHP & sebaliknya
        'images' => 'array',
    ];
}
