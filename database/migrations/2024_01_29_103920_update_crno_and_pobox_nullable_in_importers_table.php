<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateCrnoAndPoboxNullableInImportersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('importers', function (Blueprint $table) {
            $table->string('crno')->nullable()->change();
            $table->string('pobox')->nullable()->change();
            $table->string('gst')->nullable()->change();
            $table->string('address')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('importers', function (Blueprint $table) {
            $table->string('crno')->nullable(false)->change();
            $table->string('pobox')->nullable(false)->change();
            $table->string('gst')->nullable(false)->change();
            $table->string('address')->nullable(false)->change();
        });
    }
}
