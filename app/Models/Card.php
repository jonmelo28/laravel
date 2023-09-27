<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Card extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'background_id',
        'solid_color',
        'repeat_background',
        'logo_id',
        'button_sahpe',
        'button_direction',
        'button_align',
        'show_button_text',
        'font_id',
        'activate_button_border',
        'button_text_color',
        'button_background_color',
        'button_border_color',
        'button_margin_top',
        'button_margin_bottom',
        'is_tempalte'
    ];

    /**
     * Relactionships:
     * Background_images
     * Logo_imagens
     * Fonts
     */

     public function backgroundImage(){
        return $this->belongsTo(BackgroundImage::class, 'background_id');
     }

     public function logoImage(){
        return $this->belongsTo(LogoImage::class, 'logo_id');
     }

     public function font(){
        return $this->belongsTo(Font::class, 'font_id');
     }
}
