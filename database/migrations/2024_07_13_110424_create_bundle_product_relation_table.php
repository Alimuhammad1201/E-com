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
        Schema::create('bundle_product_relation', function (Blueprint $table) {
            $table->id();
            $table->string('rel_title', 255)->charset('latin1')->collation('latin1_swedish_ci'); // varchar(255)
            $table->integer('product_id'); // int(10)
            $table->integer('bundle_id'); // int(10)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bundle_product_relation');
    }
};
