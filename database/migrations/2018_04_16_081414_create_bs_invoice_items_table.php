<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBsInvoiceItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bs_invoice_items', function (Blueprint $table) {
            $table->increments('id');
              $table->string('rate');
            $table->string('quantity');
            $table->string('sub_total');
            $table->string('disc_amount');
            $table->string('tax_amount');
            $table->string('disc_perc');
            $table->string('salesperson');
            
            $table->string('vendor');
            $table->string('item');
            $table->string('gst_per');
            $table->string('gst_tax');
             $table->integer('bill_id');
            $table->integer('salesperson_id');
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
        Schema::dropIfExists('bs_invoice_items');
    }
}
