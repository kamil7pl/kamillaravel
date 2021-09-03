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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->integer('rocznik');
            $table->string('typ-silnika');
            $table->integer('pojemnosc-silnika');
            $table->string('typ-nadwozia');
            $table->integer('liczba-miejsc');
            $table->integer('przebieg');
            $table->integer('moc-silnika');
            $table->string('skrzynia-biegow');
            $table->string('kolor');
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
        Schema::dropIfExists('cars');
    }
}
