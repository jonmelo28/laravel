<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sections extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'card_id',
        'position'
    ];

    /**
     * Relationships
     */

     public function card(){
        return $this->belongsTo(Card::class, 'card_id');
     }
}
