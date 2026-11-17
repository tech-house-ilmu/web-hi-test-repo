<?php

namespace App\Models;

use App\Models\Traits\ClearsAppCache;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeadersDetailsAbout extends Model
{
    use HasFactory, ClearsAppCache;

    protected $fillable = [
        'leaders_details_img',
        'leaders_details_name',
        'leaders_details_position',
        'leaders_details_position_division',
        'leaders_details_sub_division',
        'leaders_details_linkedin',
        'leaders_details_email',
        'order',
    ];
}
