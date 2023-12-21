<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subject;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subject = new Subject();
        $subject->id = "sor";
        $subject->name = "Sistemas operativos en red";
        $subject->hours = 180;
        $subject->grade = 2;
        $subject->course_id = "smr";
        $subject->save();

        $subject = new Subject();
        $subject->id = "ser";
        $subject->name = "Servicios en red";
        $subject->hours = 170;
        $subject->grade = 2;
        $subject->course_id = "smr";
        $subject->save();

        $subject = new Subject();
        $subject->id = "fol";
        $subject->name = "Formación y orientación laboral";
        $subject->hours = 90;
        $subject->grade = 2;
        $subject->course_id = "smr";
        $subject->save();

        $subject = new Subject();
        $subject->id = "eie";
        $subject->name = "Empresa e iniciativa emprendedora";
        $subject->hours = 60;
        $subject->grade = 2;
        $subject->course_id = "daw";
        $subject->save();

        $subject = new Subject();
        $subject->id = "dwec";
        $subject->name = "Desarrollo web en entorno cliente";
        $subject->hours = 125;
        $subject->grade = 2;
        $subject->course_id = "daw";
        $subject->save();

        $subject = new Subject();
        $subject->id = "dwes";
        $subject->name = "Desarrollo web en entorno servidor";
        $subject->hours = 160;
        $subject->grade = 2;
        $subject->course_id = "daw";
        $subject->save();

        $subject = new Subject();
        $subject->id = "psp";
        $subject->name = "Programación de servicios y procesos";
        $subject->hours = 70;
        $subject->grade = 2;
        $subject->course_id = "dam";
        $subject->save();

        $subject = new Subject();
        $subject->id = "din";
        $subject->name = "Desarrollo de interfaces";
        $subject->hours = 125;
        $subject->grade = 2;
        $subject->course_id = "dam";
        $subject->save();

        $subject = new Subject();
        $subject->id = "pmm";
        $subject->name = "Programación multimedia y dispositivos móviles";
        $subject->hours = 85;
        $subject->grade = 2;
        $subject->course_id = "dam";
        $subject->save();

        $subject = new Subject();
        $subject->id = "par";
        $subject->name = "Planificación y Administración de Redes";
        $subject->hours = 170;
        $subject->grade = 2;
        $subject->course_id = "asr";
        $subject->save();

        $subject = new Subject();
        $subject->id = "iso";
        $subject->name = "Implantación de Sistemas Operativos";
        $subject->hours = 210;
        $subject->grade = 2;
        $subject->course_id = "asr";
        $subject->save();

        $subject = new Subject();
        $subject->id = "gbd";
        $subject->name = "Gestión de Bases de Datos";
        $subject->hours = 170;
        $subject->grade = 2;
        $subject->course_id = "asr";
        $subject->save();
    }
}
