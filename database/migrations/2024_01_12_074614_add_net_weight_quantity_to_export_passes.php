<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNetWeightQuantityToExportPasses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('export_passes', function (Blueprint $table) {
            $table->string('net_weight_quantity')->nullable()->after('gross_weight_quantity');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('export_passes', function (Blueprint $table) {
            $table->dropColumn('net_weight_quantity');
        });
    }
}
