<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotelbeds_backup/hotels', function (Blueprint $table) {
            $table->increments('Hotel_ID');
            $table->string('Hotel_Name');
            //$table->double('lat');
            //$$table->double('lon');
            $table->string('city');
            $table->integer('order_count_trivago');
            $table->integer('order_count_tripadvisor');
            $table->integer('order_count_others');
            $table->integer('Orders');
            $table->integer('RNS');
            $table->bigInteger('GBV');
            $table->integer('TA_score');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotels');
    }
}
