<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTypeOfPackegToExportPasses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('export_passes', function (Blueprint $table) {
            $table->string('type_of_packeg')->nullable()->after('marks_of_package');
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
            $table->dropColumn('type_of_packeg');
        });
    }
}
