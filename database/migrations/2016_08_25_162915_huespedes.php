<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Huespedes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('huespedes', function(Blueprint $table){
          $table->string('pasaporte')->primary();
          $table->string('nombres');
          $table->string('apellidos');
          $table->string('universidad');
          $table->string('pais');
          $table->string('nacionalidad');
          $table->string('email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('huespedes');
    }
}
