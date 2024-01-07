<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public $incrementing = false;
    protected $fillable = ['id', 'name', 'hours', 'fcts'];

    public function subjects(){
        return $this->hasMany(Subject::class); //un curso tiene muchos subjects
    }
}
