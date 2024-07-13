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
        Schema::create('product_categories', function (Blueprint $table) {
            $table->bigIncrements('p_cat_id'); // equivalent to int(10) with auto-increment and unsigned
            $table->text('p_cat_title'); // TEXT equivalent for p_cat_title
            $table->text('p_cat_top')->nullable(); // Nullable TEXT equivalent for p_cat_top
            $table->text('p_cat_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_categories');
    }
};
