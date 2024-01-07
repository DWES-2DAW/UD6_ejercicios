<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model; 



class Course extends Model
{
    public $incrementing = false; // Para que no se autoincremente el id porque ya lo tenemos definido con un string
    protected $fillable = ['id', 'name', 'hours', 'requires_practice'];


    public function subjects()
    {
        return $this->hasMany(Subject::class);  // relacion de uno a muchos con la tabla subjects un curso tiene muchas asignaturas
    }
}



