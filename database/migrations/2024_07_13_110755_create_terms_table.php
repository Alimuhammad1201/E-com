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
        Schema::create('terms', function (Blueprint $table) {
            $table->bigIncrements('term_id'); // equivalent to int(10) with auto-increment and unsigned
            $table->string('term_title', 100); // VARCHAR(100) for term_title
            $table->string('term_link', 100); // VARCHAR(100) for term_link
            $table->text('term_desc');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('terms');
    }
};
