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
        Schema::create('stores', function (Blueprint $table) {
            $table->bigIncrements('store_id'); // equivalent to int(10) with auto-increment and unsigned
            $table->string('store_title', 255); // VARCHAR(255) for store_title
            $table->string('store_image', 255); // VARCHAR(255) for store_image
            $table->text('store_desc'); // TEXT equivalent for store_desc
            $table->string('store_button', 255); // VARCHAR(255) for store_button
            $table->string('store_url', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stores');
    }
};
