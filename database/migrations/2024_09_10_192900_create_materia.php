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
        Schema::create('materias', function (Blueprint $table) {
            $table->id();  // ID autoincremental
            $table->string('nombreMateria', 200);  // Nombre de la materia
            $table->char('nivel', 1);  // Nivel (solo puede ser 'L' o 'M')
            $table->string('nombreMediano', 100);  // Nombre mediano de la materia
            $table->string('nombreCorto', 50);  // Nombre corto de la materia
            $table->char('modalidad', 1);  // Modalidad (solo puede ser 'P' o 'E')
            $table->foreignId('idReticula')  // Relación con la tabla de retículas
                  ->constrained('reticulas', 'id')
                  ->onDelete('cascade');  // Eliminar materias si se elimina la retícula
            $table->timestamps();  // Timestamps para created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materias');
    }
};
