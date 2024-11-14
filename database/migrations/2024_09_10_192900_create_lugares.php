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
        Schema::create('lugares', function (Blueprint $table) {
            $table->id(); // ID autoincremental de tipo BIGINT
            $table->string('nombrelugar', 25);
            $table->string('nombrecorto', 5);
            $table->foreignId('edificio_id')->constrained('edificios')->onDelete('cascade'); // Clave foránea a edificios
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lugares');
    }
};
