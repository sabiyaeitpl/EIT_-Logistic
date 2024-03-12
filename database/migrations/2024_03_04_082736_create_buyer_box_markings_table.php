<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuyerBoxMarkingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buyer_box_markings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('buyer_indent_id');
            $table->foreign('buyer_indent_id')->references('id')->on('buyer_indents');
            $table->string('item_name');
            $table->string('box_or_bag');
            $table->string('number_of_box');
            $table->string('packing_size');
            $table->string('net_quentity_packed');
            $table->string('box_weight');
            $table->string('box_gross_weight');
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
        Schema::dropIfExists('buyer_box_markings');
    }
}
