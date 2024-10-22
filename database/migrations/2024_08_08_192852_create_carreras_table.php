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
        Schema::create('carreras', function (Blueprint $table) {
            $table->id();
            $table->string("nombreCarrera", 100)->unique();  // Ajuste a camelCase
            $table->string("nombreMediano", 100)->unique();  // Ajuste a camelCase
            $table->string("nombreCorto", 100)->unique();    // Ajuste a camelCase
            $table->foreignId("depto_id")                    // Clave foránea, correcto
                  ->constrained('deptos', 'idDepto')
                  ->onDelete('cascade');                    // Eliminar carreras si se elimina el depto
            $table->timestamps();                           // Timestamps (created_at, updated_at)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carreras');
    }
};

