<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardAudios extends Model
{
    use HasFactory;

    protected $fillable = [
        'card_id',
        'audio_align',
        'audio_title_text',
        'audio_title_text_color',
        'audio_title_text_background_color',
        'audio_file_path',
        'position'
    ];

    /**
     * Relationships
     */

     public function card(){
        return $this->belongsTo(Card::class, 'card_id');
     }

}
