<?php

namespace App\Models;

use App\Models\Traits\ClearsAppCache;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeHero extends Model
{
    use HasFactory, ClearsAppCache;

    protected $guarded = [];

    protected $casts = [
        'slides' => 'array',
        'is_active' => 'boolean',
    ];
}
