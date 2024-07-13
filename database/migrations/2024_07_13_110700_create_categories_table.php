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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->text('cat_title')->charset('latin1')->collation('latin1_swedish_ci'); // text
            $table->text('cat_top')->charset('latin1')->collation('latin1_swedish_ci'); // text
            $table->text('cat_image')->charset('latin1')->collation('latin1_swedish_ci'); // text
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
