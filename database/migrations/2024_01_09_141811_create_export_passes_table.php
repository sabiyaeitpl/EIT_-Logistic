<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExportPassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('export_passes', function (Blueprint $table) {
            $table->id();
            $table->integer('reference_id');
            $table->integer('exporter_id');
            $table->string('importer_name1')->nullable();
            $table->string('importer_name2')->nullable();
            $table->text('importer_address1')->nullable();
            $table->text('importer_address2')->nullable();
            $table->string('means_of_transport')->nullable();
            $table->string('port_of_loading')->nullable();
            $table->string('port_of_discharge')->nullable();
            $table->string('final_destination')->nullable();
            $table->string('marks_of_package')->nullable();
            $table->string('no_of_package')->nullable();
            $table->string('total_package')->nullable();
            $table->string('origin_criteria')->nullable();
            $table->string('gross_weight_quantity')->nullable();
            $table->string('invoice_no')->nullable();
            $table->date('date')->nullable();
            $table->string('export_to')->nullable();
            $table->string('place')->nullable();
            $table->string('place_date')->nullable();
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
        Schema::dropIfExists('export_passes');
    }
}
