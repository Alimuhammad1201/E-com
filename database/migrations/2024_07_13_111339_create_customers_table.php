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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name', 255)->charset('latin1')->collation('latin1_swedish_ci'); // varchar(255)
            $table->string('customer_email', 255)->charset('latin1')->collation('latin1_swedish_ci'); // varchar(255)
            $table->string('customer_pass', 255)->charset('latin1')->collation('latin1_swedish_ci'); // varchar(255)
            $table->text('customer_country')->charset('latin1')->collation('latin1_swedish_ci'); // text
            $table->text('customer_city')->charset('latin1')->collation('latin1_swedish_ci'); // text
            $table->string('customer_contact', 255)->charset('latin1')->collation('latin1_swedish_ci'); // varchar(255)
            $table->text('customer_address')->charset('latin1')->collation('latin1_swedish_ci'); // text
            $table->text('customer_image')->charset('latin1')->collation('latin1_swedish_ci'); // text
            $table->string('customer_ip', 255)->charset('latin1')->collation('latin1_swedish_ci'); // varchar(255)
            $table->text('customer_confirm_code')->charset('latin1')->collation('latin1_swedish_ci'); // text
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
