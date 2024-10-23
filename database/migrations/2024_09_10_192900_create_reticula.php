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
        Schema::create('reticulas', function (Blueprint $table) {
            $table->id(); // ID autoincremental
            $table->string('descripcion', 200); // Descripción de la retícula
            $table->date('fechaEnVigor'); // Fecha en que la retícula entra en vigor
            $table->foreignId('idCarrera') // Clave foránea que se relaciona con la carrera
                  ->constrained('carreras') 
                  ->onDelete('cascade');
            $table->timestamps(); // Campos created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reticulas');
    }
};
