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
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('product_id'); // equivalent to int(10) with auto-increment and unsigned
            $table->integer('p_cat_id'); // int(10) for p_cat_id
            $table->integer('cat_id'); // int(10) for cat_id
            $table->integer('manufacturer_id'); // int(10) for manufacturer_id
            $table->timestamp('date')->useCurrent(); // TIMESTAMP equivalent for date with current timestamp
            $table->text('product_title'); // TEXT equivalent for product_title
            $table->text('product_url'); // TEXT equivalent for product_url
            $table->text('product_img1'); // TEXT equivalent for product_img1
            $table->text('product_img2')->nullable(); // Nullable TEXT equivalent for product_img2
            $table->text('product_img3')->nullable(); // Nullable TEXT equivalent for product_img3
            $table->integer('product_price'); // int(10) for product_price
            $table->integer('product_psp_price'); // int(100) for product_psp_price
            $table->text('product_desc'); // TEXT equivalent for product_desc
            $table->text('product_features'); // TEXT equivalent for product_features
            $table->text('product_video')->nullable(); // Nullable TEXT equivalent for product_video
            $table->text('product_keywords'); // TEXT equivalent for product_keywords
            $table->text('product_label'); // TEXT equivalent for product_label
            $table->string('status', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
