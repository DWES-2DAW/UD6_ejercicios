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
        Schema::create('courses', function (Blueprint $table) {
            $table->string('id', 3)->primary(); // Identificador de 3 letras como clave primaria
            $table->string('name'); // Nombre del curso
            $table->integer('hours'); // Número de horas
            $table->boolean('requires_practice'); // Verdadero o falso para prácticas de empresa
            $table->timestamps(); // Timestamps (created_at y updated_at)
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
