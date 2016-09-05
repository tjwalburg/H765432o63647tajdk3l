<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Reservas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function(Blueprint $table){
          $table->increments('id');
          $table->string('status');
          $table->integer('n_noches');
          $table->date('f_entrada');
          $table->date('f_salida');
          $table->unsignedInteger('habitacion_id');
          $table->string('huesped_id');
          $table->string('docente_id');
        });

        Schema::table('reservas',function($table){
          $table->foreign('habitacion_id')->references('id')->on('habitaciones');
          $table->foreign('huesped_id')->references('pasaporte')->on('huespedes');
          $table->foreign('docente_id')->references('pasaporte')->on('docentes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('reservas');
    }
}
