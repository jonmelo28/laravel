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
        Schema::create('section_product_addons', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('section_product_id');
            $table->foreign('section_product_id')->references('id')->on('section_products');
            $table->string('title_text');
            $table->longText('description_text')->nullable();
            $table->decimal('price', 19, 2);
            $table->integer('position');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('section_product_addons');
    }
};
