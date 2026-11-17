<?php

namespace App\Models;

use App\Models\Traits\ClearsAppCache;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutOrganization extends Model
{
    use HasFactory, ClearsAppCache;

    protected $guarded = [];

    protected $casts = [
        'missions' => 'array',
        'culture_items' => 'array',
    ];
}
