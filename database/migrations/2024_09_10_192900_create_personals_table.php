<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('personals', function (Blueprint $table) {
            $table->id(); // ID autoincremental
            $table->string('RFC', 100);
            $table->string('nombres', 50);
            $table->string('apellidop', 50);
            $table->string('apellidom', 50);
            $table->string('licenciatura', 200)->nullable();
            $table->boolean('licit')->default(false);
            $table->string('especializacion', 200)->nullable();
            $table->boolean('espit')->default(false);
            $table->string('maestria', 200)->nullable();
            $table->boolean('maetit')->default(false);
            $table->string('doctorado', 200)->nullable();
            $table->boolean('doctit')->default(false);
            $table->date('fechasingsep')->nullable();
            $table->date('fechaisingins')->nullable();
            $table->foreignId('depto_id')->constrained('deptos', 'idDepto')->onDelete('cascade');
            $table->foreignId('puesto_id')->constrained('puestos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personals');
    }
};
