<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Student::factory(24)->create();

        $this->call([
            CoursesTableSeeder::class,
            SubjectsTableSeeder::class,
            StudentsSubjectsTableSeeder::class
        ]);        
    }
}
