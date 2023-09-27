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
        Schema::create('card_audios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('card_id');
            $table->foreign('card_id')->references('id')->on('cards');
            $table->enum('audio_align',['end_of_card', 'before_the_button', 'after_the_button', 'before_the_products', 'after_the_products']);
            $table->string('audio_title_text');
            $table->string('audio_title_text_color');
            $table->string('audio_title_text_background_color');
            $table->string('audio_file_path');
            $table->string('position');
            $table->timestamps();
        });
    }

  
    public function down(): void
    {
        Schema::dropIfExists('card_audios');
    }
};
