<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuyerIndentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buyer_indents', function (Blueprint $table) {
            $table->id();
            $table->integer('exporter_id');
            $table->integer('importer_id');
            $table->string('buyer_order_no');
            $table->string('buyer_order_po_no');
            $table->date('paking_date');
            $table->date('flight_date');
            $table->string('gross_weight');
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
        Schema::dropIfExists('buyer_indents');
    }
}
