<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Subject;
class Course extends Model
{
    public $incrementing = false;
    protected $fillable = ['id', 'name', 'hours', 'fcts'];

    public function subjects(){
        return $this->hasMany(Subject::class);
    }
}
