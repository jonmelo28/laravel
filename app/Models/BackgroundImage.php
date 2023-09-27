<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BackgroundImage extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['image_path', 'is_template'];
}
