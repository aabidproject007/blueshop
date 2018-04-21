<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBsInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bs_invoices', function (Blueprint $table) {
            $table->increments('id');
             $table->string('customer_name');
            $table->string('phone_number');
            $table->string('sub_total');
            $table->string('tax_perc');
            $table->string('tax_amount');
            $table->string('disc_perc');
            $table->string('disc_amount');
            $table->string('total_amount');
            $table->string('paid');
            $table->string('balance');
             $table->integer('bill_generated_by');
            $table->integer('bill_updated_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bs_invoices');
    }
}
