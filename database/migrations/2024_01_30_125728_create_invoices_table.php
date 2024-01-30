<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('exporter_id')->nullable();
            $table->string('invoice_no')->nullable();
            $table->date('date_invoice')->nullable();
            $table->date('dispatch_date')->nullable();
            $table->string('po_no')->nullable();
            $table->date('order_by_date')->nullable();
            $table->unsignedBigInteger('importer_id1')->nullable();
            $table->unsignedBigInteger('importer_id2')->nullable();
            $table->string('awb_no')->nullable()->nullable();
            $table->string('gst_no')->nullable()->nullable();
            $table->string('buyer_consigne')->nullable();
            $table->string('pre_carriage')->nullable();
            $table->string('pre_carrier')->nullable();
            $table->string('country_origin_goods')->nullable();
            $table->string('country_final_destination')->nullable();
            $table->string('vesel')->nullable();
            $table->string('flight_no')->nullable();
            $table->string('port_of_loading')->nullable();
            $table->string('port_of_discharge')->nullable();
            $table->string('final_destination')->nullable();
            $table->unsignedBigInteger('bank1')->nullable();
            $table->unsignedBigInteger('bank2')->nullable();

            $table->timestamps();
            $table->foreign('exporter_id')->references('id')->on('companys');
            $table->foreign('importer_id1')->references('id')->on('importers');
            $table->foreign('importer_id2')->references('id')->on('importers');
            $table->foreign('bank1')->references('id')->on('banks');
            $table->foreign('bank2')->references('id')->on('banks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}

