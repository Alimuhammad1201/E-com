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
        Schema::create('manufacturers', function (Blueprint $table) {
            $table->bigIncrements('manufacturer_id'); // equivalent to int(10) with auto-increment and unsigned
            $table->text('manufacturer_title'); // TEXT equivalent for manufacturer_title
            $table->text('manufacturer_top')->nullable(); // Nullable TEXT equivalent for manufacturer_top
            $table->text('manufacturer_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('manufacturers');
    }
};
