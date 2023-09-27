<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectionProductAddon extends Model
{
    use HasFactory;

    protected $fillable = [
        'section_product_id',
        'title_text',
        'description_text',
        'price',
        'position'
    ];

    /**
     * Relationship
     */

     public function sectionProduct(){
        return $this->belongsTo(SectionProduct::class, 'section_product_id');
     }
}
