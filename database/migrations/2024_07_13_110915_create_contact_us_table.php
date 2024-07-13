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
        Schema::create('contact_us', function (Blueprint $table) {
            $table->id();
            $table->text('contact_email')->charset('latin1')->collation('latin1_swedish_ci'); // text
            $table->text('contact_heading')->charset('latin1')->collation('latin1_swedish_ci'); // text
            $table->text('contact_desc')->charset('latin1')->collation('latin1_swedish_ci'); // text
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_us');
    }
};
