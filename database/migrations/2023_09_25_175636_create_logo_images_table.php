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
        Schema::create('logo_images', function (Blueprint $table) {
            $table->id();
            $table->string('image_path');
            $table->enum('position',['center','left','right']);
            $table->integer('width');
            $table->boolean('active_animation')->default(false);
            $table->integer('margin_top')->default(0);
            $table->integer('margin_bottom')->default(0);
            $table->integer('margin_top-mobile')->default(0);
            $table->integer('margin_bottom_mobile')->default(0);
            $table->boolean('is_template')->default(false);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logo_images');
    }
};
