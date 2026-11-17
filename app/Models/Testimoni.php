<?php

namespace App\Models;

use App\Models\Traits\ClearsAppCache;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    use HasFactory, ClearsAppCache;

    protected $fillable = [
        'testimoni_img',
        'testimoni_name',
        'testimoni_position',
        'testimoni_description',
    ];
}
