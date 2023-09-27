<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardBanners extends Model
{
    use HasFactory;

    protected $fillable = [
        'card_id',
        'image_path',
        'banner_align',
        'position'
    ];

     /**
     * Relationships
     */

     public function card(){
        return $this->belongsTo(Card::class, 'card_id');
     }
}
