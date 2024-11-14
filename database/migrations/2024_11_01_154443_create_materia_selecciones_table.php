<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('materia_selecciones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_periodo');
            $table->unsignedBigInteger('id_materia');
            $table->unsignedBigInteger('id_carrera');
            $table->integer('semestre');
            $table->timestamps();
    
            $table->foreign('id_periodo')->references('id')->on('periodos')->onDelete('cascade');
            $table->foreign('id_materia')->references('id')->on('materias')->onDelete('cascade');
            $table->foreign('id_carrera')->references('id')->on('carreras')->onDelete('cascade');
        });
    }
    
};
