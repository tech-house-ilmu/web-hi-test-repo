<?php

namespace App\Models;

use App\Models\Traits\ClearsAppCache;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CollaborationDocumentation extends Model
{
    use HasFactory, ClearsAppCache;

    protected $guarded = [];

    protected $casts = [
        'is_active' => 'boolean',
        'sort_order' => 'integer',
    ];
}
