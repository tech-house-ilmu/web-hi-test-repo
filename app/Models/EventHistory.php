<?php

namespace App\Models;

use App\Models\Traits\ClearsAppCache;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventHistory extends Model
{
    use HasFactory, ClearsAppCache;

    protected $guarded = [];

    protected $casts = [
        'gallery' => 'array',
        'goals' => 'array',
        'is_published' => 'boolean',
        'sort_order' => 'integer',
    ];
}
