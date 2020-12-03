<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('dealer_info_id');
            $table->unsignedBigInteger('company_id');
            $table->date('date');
            $table->text('brick_type');
            $table->text('cash_type');
            $table->text('vehicle_no');
            $table->text('delivery_place');
            $table->text('consumer_name');
            $table->bigInteger('driver_no');
            $table->float('rate');
            $table->integer('quantity');
            $table->text('delivery_type');
            $table->float('reward_rate');
            $table->float('amount');
            $table->timestamps();

            $table->foreign('dealer_info_id')->references('id')->on('dealer_infos')->onDelete('cascade');
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');

        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales');
    }
}
