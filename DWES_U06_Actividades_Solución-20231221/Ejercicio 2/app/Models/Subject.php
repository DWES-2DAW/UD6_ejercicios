<?php

namespace App\Models;

use Illuminate\Database\Eloquent\softDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course;

class Subject extends Model
{
    use SoftDeletes;

    public function course(){
        return $this->belongTo(Course::class);
    }
}
