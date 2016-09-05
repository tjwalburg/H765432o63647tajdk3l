<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsuarioTieneTestimonios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_tiene_testimonios',function (Blueprint $table){
          $table->unsignedInteger('usuario_rut');
          $table->unsignedInteger('testimonio_id');
        });

        Schema::table('usuario_tiene_testimonios',function($table){
          $table->foreign('usuario_rut')->references('rut')->on('users');
          $table->foreign('testimonio_id')->references('id')->on('testimonios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('usuario_tiene_testimonios');
    }
}
