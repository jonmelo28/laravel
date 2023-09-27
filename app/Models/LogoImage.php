<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LogoImage extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'image_path',
        'position',
        'width',
        'activate_animation',
        'margin_top',
        'margin_bottom',
        'margin_top_mobile',
        'magin_bottom_mobile',
        'is_template'
    ];
}
