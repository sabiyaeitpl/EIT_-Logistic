<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBoxPriceUsdToBoxMastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('box_masters', function (Blueprint $table) {
             $table->decimal('box_price_usd', 10, 2)->nullable()->after('box_price');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('box_masters', function (Blueprint $table) {
            //
        });
    }
}
