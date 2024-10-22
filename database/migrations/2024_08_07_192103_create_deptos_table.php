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
        Schema::create('deptos', function (Blueprint $table) {
            $table->id('idDepto'); // ID autoincremental para Deptos
            $table->string("nombredepto", 100)->unique();
            $table->string("nombremediano", 100)->unique();
            $table->string("nombrecorto", 100)->unique();
            $table->timestamps(); // Timestamps para created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deptos');
    }
};
