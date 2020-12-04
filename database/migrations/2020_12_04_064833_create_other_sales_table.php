<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOtherSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('other_sales', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('other_info_id');
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
            $table->float('amount');
            $table->timestamps();

            $table->foreign('other_info_id')->references('id')->on('other_infos')->onDelete('cascade');
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
        Schema::dropIfExists('other_sales');
    }
}
