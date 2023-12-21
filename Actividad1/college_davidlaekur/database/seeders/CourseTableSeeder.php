<?php

namespace Database\Seeders;
use App\Models\Course;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CourseTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
    $courses = new Course();

    $courses->id = 'DAW';
    $courses->name = 'Desarrollo de Aplicaciones Web';
    $courses->hours = 2000;
    $courses->requires_practice = true;
    $courses->save();
    
    $courses = new Course();
    $courses->id = 'ASR';
    $courses->name = 'Administración de Sistemas Informáticos en Red';
    $courses->hours = 2000;
    $courses->requires_practice = true;
    $courses->save();
    
    $courses = new Course();
    $courses->id = 'DAM';
    $courses->name = 'Desarrollo de Aplicaciones Multiplataforma';
    $courses->hours = 2000;
    $courses->requires_practice = true;
    $courses->save();

    }
}