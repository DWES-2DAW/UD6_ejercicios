<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
    </head>
    <body>
        <h1 class="display-1 text-center">{{Str::upper($subject->id)}} - {{$subject->name}}</h1>
          <ul class="list-group">
            <li class="list-group-item">Alias: {{Str::upper($subject->id)}}</li>
            <li class="list-group-item">Nombre: {{$subject->name}}</li>
            <li class="list-group-item">Nº Horas: {{$subject->hours}}</li>
            <li class="list-group-item">Se cursa en {{$subject->grade}} año</li>
            <li class="list-group-item">Ciclo: {{Str::upper($subject->course_id)}}</li>
          </ul> 
          <h3 class="display-3 text-center">Alumnos que cursan o han cursado la asignatura.</h1>
          <table class="table">
            <tr>
                <th>DNI</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Año</th>
            </tr>
            @foreach ($subject->students as $student)
            <tr>
                <td>{{$student->dni}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->last_name}}</td>
                <td>{{$student->email}}</td>
                <td>{{$student->phone}}</td>
                <td>{{$student->pivot->year}}</td>
            </tr>
            @endforeach
            
          </table>
    
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
