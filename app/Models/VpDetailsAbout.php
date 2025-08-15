<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VpDetailsAbout extends Model
{
    use HasFactory;

    protected $fillable = [
        'vp_details_img','vp_details_name','vp_details_position','vp_details_linkedin','vp_details_email'
    ];

}
