<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToBuyerIndentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('buyer_indents', function (Blueprint $table) {
            $table->string('vessel');
            $table->string('flight_no');
            $table->string('port_of_discharge');
            $table->string('final_destination');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('buyer_indents', function (Blueprint $table) {
            //
        });
    }
}
