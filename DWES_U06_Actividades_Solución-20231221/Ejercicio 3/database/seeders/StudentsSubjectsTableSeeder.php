<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subject;
use App\Models\Student;
class StudentsSubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Selecciono de la BD todas las asignaturas
        $subjects = Subject::all();
        //Selecciono de la BD todos los usuarios
        $users = Student::all();
        foreach ($subjects as $subject){
            //Selecciono de la colección dos usuarios aleatorios
            $users_selected = $users->random(2);
            foreach ($users_selected as $key => $user_selected){
                //Utilizo la relacion para asignar a una asignatura un usuario
                $subject->students()->attach($user_selected, ['year' => (date("Y")-rand(1, 25))]);
                //Elimina el usuario asignado de la colección
                $users->forget($key);
            }
        }
    }
}
