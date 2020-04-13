<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeatPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seat_prices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('seat_price');
            $table->string('route_name')->nullable();
            $table->string('bus_name')->nullable();
            $table->string('bus_number')->nullable();
            $table->string('dep_time')->nullable();
            $table->string('arr_time')->nullable();
            $table->integer('total_seat');
            $table->integer('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seat_prices');
    }
}
