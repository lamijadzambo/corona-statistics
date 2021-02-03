<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePopulationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('populations', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('canton')->unique();
            $table->string('total')->nullable();
            $table->string('person1')->nullable();
            $table->string('person2')->nullable();
            $table->string('person3')->nullable();
            $table->string('person4')->nullable();
            $table->string('person5')->nullable();
            $table->string('six_or_more_person')->nullable();
            $table->string('implausible_household')->nullable();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('populations');
    }
}
