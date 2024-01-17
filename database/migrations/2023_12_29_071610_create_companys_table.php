<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companys', function (Blueprint $table) {
            $table->id();
            $table->string('company_name')->nullable();
            $table->string('address')->nullable();
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('pin')->nullable();
            $table->string('gst')->nullable();
            $table->string('ie_code')->nullable();
            $table->string('cin')->nullable();
            $table->string('image')->nullable();
            $table->integer('status')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companys');
    }
}
