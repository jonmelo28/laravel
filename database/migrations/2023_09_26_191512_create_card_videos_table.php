<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('card_videos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('card_id');
            $table->foreign('card_id')->references('id')->on('cards');
            $table->unsignedBigInteger('font_id');
            $table->foreign('font_id')->references('id')->on('fonts');
            $table->enum('video_align',['end_of_card', 'before_the_button', 'after_the_button', 'before_the_products', 'after_the_products']);
            $table->string('video_title_text');
            $table->integer('video_title_text_font_size');
            $table->string('video_title_text_color');
            $table->string('video_title_text_background_color');
            $table->string('video_description_text'); 
            $table->integer('video_description_text_font_size');   
            $table->string('video_description_text_color');   
            $table->string('video_description_text_background_color');
            $table->string('video_cover_image_path')->nullable();
            $table->string('video_url');
            $table->string('position');                    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('card_videos');
    }
};
