<?php

namespace App\Models;

use App\Models\Traits\ClearsAppCache;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CollaborationType extends Model
{
    use HasFactory, ClearsAppCache;

    protected $guarded = [];

    protected $casts = [
        'process' => 'array',
        'activities' => 'array',
        'benefits' => 'array',
    ];
}
