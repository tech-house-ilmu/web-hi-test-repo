<?php

namespace App\Models;

use App\Models\Traits\ClearsAppCache;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Article extends Model
{
    use HasFactory, ClearsAppCache;

    protected $fillable = [
        'title',
        'text',
        'img',
        'author',
        'editor',
        'date',
        'slug',
        'category',
        'sort_order',
        'is_featured',
        'is_published',
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'is_published' => 'boolean',
        'sort_order' => 'integer',
    ];

    protected static function booted()
    {
        static::deleting(function ($article) {
            if ($article->img) {
                Storage::delete($article->img);
            }
        });
    }
}
