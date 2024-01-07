<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course; // no es necesario importar el modelo Course porque esta en el mismo namespace
use Illuminate\Database\Eloquent\SoftDeletes;

class Subject extends Model
{
    use SoftDeletes;

    public function course()
    {
        return $this->belongsTo(Course::class); // relacion de muchos a uno con la tabla courses muchas asignaturas pertenecen a un curso
    }
}


