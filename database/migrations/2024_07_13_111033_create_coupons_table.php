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
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id'); // int(10)
            $table->string('coupon_title', 255)->charset('latin1')->collation('latin1_swedish_ci'); // varchar(255)
            $table->string('coupon_price', 255)->charset('latin1')->collation('latin1_swedish_ci'); // varchar(255)
            $table->string('coupon_code', 255)->charset('latin1')->collation('latin1_swedish_ci'); // varchar(255)
            $table->integer('coupon_limit')->default(100); // int(100)
            $table->integer('coupon_used')->default(0); // int(100)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coupons');
    }
};
