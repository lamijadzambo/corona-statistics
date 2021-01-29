<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeathsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deaths', function (Blueprint $table) {
            $table->unsignedInteger('id')->unique();
            $table->integer('total2020')->nullable();
            $table->integer('total2019')->nullable();
            $table->integer('total2018')->nullable();
            $table->integer('total2017')->nullable();
            $table->integer('total2016')->nullable();
            $table->integer('total2015')->nullable();

            $table->integer('AGE0_19_2020')->nullable();
            $table->integer('AGE0_19_2019')->nullable();
            $table->integer('AGE0_19_2018')->nullable();
            $table->integer('AGE0_19_2017')->nullable();
            $table->integer('AGE0_19_2016')->nullable();
            $table->integer('AGE0_19_2015')->nullable();

            $table->integer('AGE20_39_2020')->nullable();
            $table->integer('AGE20_39_2019')->nullable();
            $table->integer('AGE20_39_2018')->nullable();
            $table->integer('AGE20_39_2017')->nullable();
            $table->integer('AGE20_39_2016')->nullable();
            $table->integer('AGE20_39_2015')->nullable();

            $table->integer('AGE40_64_2020')->nullable();
            $table->integer('AGE40_64_2019')->nullable();
            $table->integer('AGE40_64_2018')->nullable();
            $table->integer('AGE40_64_2017')->nullable();
            $table->integer('AGE40_64_2016')->nullable();
            $table->integer('AGE40_64_2015')->nullable();

            $table->integer('AGE65_79_2020')->nullable();
            $table->integer('AGE65_79_2019')->nullable();
            $table->integer('AGE65_79_2018')->nullable();
            $table->integer('AGE65_79_2017')->nullable();
            $table->integer('AGE65_79_2016')->nullable();
            $table->integer('AGE65_79_2015')->nullable();

            $table->integer('AGE80_2020')->nullable();
            $table->integer('AGE80_2019')->nullable();
            $table->integer('AGE80_2018')->nullable();
            $table->integer('AGE80_2017')->nullable();
            $table->integer('AGE80_2016')->nullable();
            $table->integer('AGE80_2015')->nullable();

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
        Schema::dropIfExists('deaths');
    }
}
