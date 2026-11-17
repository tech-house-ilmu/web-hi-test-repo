<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HIProgrammeHero extends Model
{
    use HasFactory;

    protected $table = 'h_i_programme_heroes';

    protected $fillable = [
        'title',
        'type',
        'badge',
        'image',
        'desc',
        'sort_order',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'sort_order' => 'integer',
    ];
}
