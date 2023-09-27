<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HitPhrase extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'card_id',
        'font_id',
        'text',
        'text_color',
        'text_background_color',
        'margin_top',
        'margin_bottom'
    ];

     /**
     * Relactionships:
     */

     public function card(){
        return $this->belongsTo(Card::class, 'card_id');
     }

     public function font(){
        return $this->belongsTo(Font::class, 'font_id');
     }

}
