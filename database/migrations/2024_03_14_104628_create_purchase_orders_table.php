<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('exporter_id')->nullable();
            $table->unsignedBigInteger('importer_id')->nullable();
            $table->unsignedBigInteger('organization_id')->nullable();
            $table->string('buyer_or_no')->nullable();
            $table->date('buyer_or_date')->nullable();
            $table->string('confirmation_type')->nullable();
            $table->string('po_no')->nullable();
            $table->date('date_of_packing')->nullable();
            $table->date('flight_date')->nullable();
            $table->string('gross_weight_limit')->nullable();
            $table->string('vessel')->nullable();
            $table->string('flight_no')->nullable();
            $table->string('port_of_discharge')->nullable();
            $table->string('final_destination')->nullable();
            $table->string('box_marking')->nullable();
            $table->unsignedTinyInteger('status')->default(1)
            ->comment('1:buyerIndent,2:tentetivePakingList,3:confirmPakingList,4:invoiceCumPakingList,5:invoiceDispatchList,6:commercialPackingList');
            $table->unsignedTinyInteger('send_status')->default(0);
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
        Schema::dropIfExists('purchase_orders');
    }
}
