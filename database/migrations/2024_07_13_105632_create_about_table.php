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
        Schema::create('about', function (Blueprint $table) {
            $table->id();
            $table->text('about_heading')->charset('latin1')->collation('latin1_swedish_ci');
            $table->text('about_short_desc')->charset('latin1')->collation('latin1_swedish_ci');
            $table->text('about_desc')->charset('latin1')->collation('latin1_swedish_ci');
            $table->timestamps(); // Adds created_at and updated_at columns
       
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about');
    }
};
