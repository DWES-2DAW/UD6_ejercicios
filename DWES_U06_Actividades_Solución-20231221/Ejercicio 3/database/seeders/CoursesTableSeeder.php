<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $course = new Course();
        $course->id = "fpb";
        $course->name = "FP básica";
        $course->hours = 2000;
        $course->fcts = true;
        $course->save();

        $course = new Course();
        $course->id = "smr";
        $course->name = "Grado medio de sistemas microinformáticos en redes";
        $course->hours = 2000;
        $course->fcts = true;
        $course->save();

        $course = new Course();
        $course->id = "dam";
        $course->name = "Grado superior de aplicaciones multiplataforma";
        $course->hours = 2000;
        $course->fcts = true;
        $course->save();

        $course = new Course();
        $course->id = "daw";
        $course->name = "Grado superior de aplicaciones web";
        $course->hours = 2000;
        $course->fcts = true;
        $course->save();

        $course = new Course();
        $course->id = "asr";
        $course->name = "Grado superior de Administración y mantenimiento de sistemas informáticos en red";
        $course->hours = 2000;
        $course->fcts = true;
        $course->save();
    }
}
