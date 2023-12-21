<?php

namespace App\Http\Controllers;

use App\Models\Course; // Asegúrate de importar tu modelo Course
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all(); // es una forma simple y directa de recuperar todos los registros de la tabla courses en la base de datos y devolverlos como una colección de instancias del modelo Course.
        return view('inicio', compact('courses')); // Pasar los cursos a la vista
        /* return view('inicio')->with('courses', $courses); *///otra  forma de pasar los cursos a la vista
    }
}