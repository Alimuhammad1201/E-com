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
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('order_id'); // equivalent to int(10) with auto-increment and unsigned
            $table->integer('customer_id'); // int(10) for customer_id
            $table->integer('invoice_no')->nullable(); // int(10) for invoice_no, nullable
            $table->text('product_id'); // TEXT equivalent for product_id
            $table->integer('qty'); // int(10) for qty
            $table->text('size'); // TEXT equivalent for size
            $table->text('order_status'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
