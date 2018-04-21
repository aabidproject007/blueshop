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
             $table->string('customer_name')->default(null;
            $table->string('phone_number')->default(null);
            $table->string('sub_total')->default(null;
            $table->string('tax_perc')->default(null;
            $table->string('tax_amount')->default(null;
            $table->string('disc_perc')->default(null;
            $table->string('disc_amount')->default(null;
            $table->string('total_amount')->default(null;
            $table->string('paid')->default(null;
            $table->string('balance')->default(null;
             $table->string('bill_generated_by')->default(null;
            $table->integer('bill_updated_by')->default(null;
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
