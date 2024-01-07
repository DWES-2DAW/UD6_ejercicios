<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subject;

class SubjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subject = new Subject();
        $subject->id = 'dwec';
        $subject->name = 'Desarrollo web entorno cliente';
        $subject->hours = 160;
        $subject->grade = 2;
        $subject->course_id = 'DAW';
        $subject->save();


        $subject = new Subject();
        $subject->id = 'diw';
        $subject->name = 'Diseño de Interfaces web';
        $subject->hours = 90;
        $subject->grade = 2;
        $subject->course_id = 'DAW';
        $subject->save();


        $subject = new Subject();
        $subject->id = 'dwes';  
        $subject->name = 'Desarrollo web entorno servidor';
        $subject->hours = 160;
        $subject->grade = 2;
        $subject->course_id = 'DAW';
        $subject->save();


        $subject = new Subject();
        $subject->id = 'par';
        $subject->name = 'Programación de aplicaciones en red';
        $subject->hours = 100;
        $subject->grade = 2;
        $subject->course_id = 'ASR';
        $subject->save();

    
        $subject = new Subject();
        $subject->id = 'srd';
        $subject->name = 'Servicios de red y directorio';
        $subject->hours = 90;
        $subject->grade = 2;
        $subject->course_id = 'ASR';
        $subject->save();

        $subject = new Subject();
        $subject->id = "iso";
        $subject->name = "Implantación de Sistemas Operativos";
        $subject->hours = 210;
        $subject->grade = 2;
        $subject->course_id = "asr";
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


    }
}
