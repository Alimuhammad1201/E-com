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
        Schema::create('customer_orders', function (Blueprint $table) {
            $table->id();
            $table->integer('customer_id'); // int(10)
            $table->integer('due_amount'); // int(100)
            $table->integer('invoice_no'); // int(100)
            $table->integer('qty'); // int(10)
            $table->text('size')->charset('latin1')->collation('latin1_swedish_ci'); // text
            $table->timestamp('order_date')->useCurrent(); // timestamp, default current_timestamp()
            $table->text('order_status')->charset('latin1')->collation('latin1_swedish_ci'); // text
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_orders');
    }
};
