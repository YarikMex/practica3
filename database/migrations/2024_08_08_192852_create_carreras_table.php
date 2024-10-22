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
           
            $table->string("idcarrera",15)->unique();
            $table->string("nombrecarrera",100)->unique();
            $table->string("nombremediano",100)->unique();
            $table->string("nombrecorto",100)->unique();
            $table->foreignId('depto_id')->constrained('deptos', 'idDepto');

            $table->timestamps();
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
