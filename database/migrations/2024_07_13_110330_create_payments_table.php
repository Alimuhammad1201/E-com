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
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('payment_id'); // equivalent to int(10) with auto-increment and unsigned
            $table->integer('invoice_no')->nullable(); // int(10) for invoice_no, nullable
            $table->integer('amount'); // int(10) for amount
            $table->text('payment_mode'); // TEXT equivalent for payment_mode
            $table->integer('ref_no')->nullable(); // int(10) for ref_no, nullable
            $table->integer('code')->nullable(); // int(10) for code, nullable
            $table->timestamp('payment_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
