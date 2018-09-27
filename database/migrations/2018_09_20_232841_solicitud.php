<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Solicitud extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->enum('estado',['espera', 'visto'])->default('espera');
            $table->string('codigo');
            $table->string('descripcion_equipo')->nullable();
            $table->text('descripcion')->nullable();
            $table->dateTime('fecha')->nullable();
            $table->integer('user_id')->unsigned();
            $table->timestamps();

            //identifica  
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('solicitudes', function (Blueprint $table) {
            //
            Schema::dropIfExists('solicitudes');
        });
    }
}
