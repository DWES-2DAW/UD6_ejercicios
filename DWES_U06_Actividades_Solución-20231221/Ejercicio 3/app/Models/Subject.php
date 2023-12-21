<?php

namespace App\Models;

use Illuminate\Database\Eloquent\softDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course;
use App\Models\Student;

class Subject extends Model
{
    use SoftDeletes;
    public $incrementing = false;
    public function course(){
        return $this->belongTo(Course::class);
    }

    public function students(){
        return $this->belongsToMany(Student::class, 'student_subject', 'subject_id', 'student_id', 'id', 'dni')->withPivot('year')->withTimestamps();
    }
}
