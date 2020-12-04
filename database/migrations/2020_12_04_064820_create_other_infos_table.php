<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOtherInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('other_infos', function (Blueprint $table) {
            $table->id();
            $table->text('other_code');
            $table->string('name');
            $table->unsignedBigInteger('company_id');
            $table->text('address');
            $table->biginteger('phone');
            $table->biginteger('paid')->nullable();
            $table->biginteger('due')->nullable();
            $table->biginteger('amount')->nullable();
            $table->text('photo')->nullable();
            $table->timestamps();

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
        Schema::dropIfExists('other_infos');
    }
}