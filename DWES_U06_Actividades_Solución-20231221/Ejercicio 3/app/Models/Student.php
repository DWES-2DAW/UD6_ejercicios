<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\softDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\Subject;
class Student extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $incrementing = false;

    public function subjects(){
        return $this->belongsToMany(Subject::class, 'student_subject', 'student_id', 'subject_id', 'dni', 'id')->withPivot('year')->withTimestamps();
    }
}
