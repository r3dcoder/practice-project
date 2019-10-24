<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rent_cars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('pic_up_location');
            $table->date('pic_up_date');
            $table->date('return_date');
            $table->string('car_type');

            $table->bigInteger('mobile_number');
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
        Schema::dropIfExists('rent_car');
    }
}
