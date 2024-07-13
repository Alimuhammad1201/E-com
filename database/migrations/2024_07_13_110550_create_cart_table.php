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
        Schema::create('cart', function (Blueprint $table) {
            $table->id();
            $table->string('ip_add', 255)->charset('latin1')->collation('latin1_swedish_ci'); // varchar(255)
            $table->integer('qty'); // int(10)
            $table->string('p_price', 255)->charset('latin1')->collation('latin1_swedish_ci'); // varchar(255)
            $table->text('size')->charset('latin1')->collation('latin1_swedish_ci'); // text
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cart');
    }
};
