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
        Schema::table('subjects', function (Blueprint $table) {
            $table->string('course_id', 3); // añadimos el campo course_id a la tabla subjects con un tamaño de 3 caracteres como foreign key de la tabla courses
            $table->foreign("course_id")->references("id")->on("courses")->onDelete("cascade")->onUpdate("cascade"); // añadimos la foreign key a la tabla subjects con la referencia a la tabla courses con de borrado y actualización en cascada
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('subjects', function (Blueprint $table) {
            $table->dropForeign(['course_id']); // revertimos a la situación anterior sin inconsistencias en la base de datos
            $table->dropColumn('course_id'); // eliminamos  la columna course_id de la tabla subjects  
    });
    }
};
