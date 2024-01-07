<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header>
        <!-- Carrusel -->
        <div id="carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($courses as $course)
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                        <img src='{{ asset("/images/$course->id.jpg")}}' class="d-block w-100" alt="{{ $course->name }}">
                        <div class="carousel-caption">
                            <h1>{{ Str::upper($course->id) }}</h1>
                            <p>{{ $course->name }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- Navegación -->
       <!--  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container-fluid">
                <span class="navbar-brand">Cursos Informática</span>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        @foreach ($courses as $course)
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">{{ Str::upper($course->id) }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </nav> -->

        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container-fluid">
        <span class="navbar-brand">Cursos de Informática</span>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                @foreach ($courses as $course)
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-{{ $course->id }}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Str::upper($course->id) }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown-{{ $course->id }}">
                            @foreach ($course->subjects as $subject)
                                <li><a class="dropdown-item" href="#">{{ $subject->name }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>
    </header>

    <!-- Footer -->
    <footer class="navbar fixed-bottom navbar-light bg-light">
        Imágenes de https://www.wallpaperbetter.com/ con licencia Creative Commons
    </footer>

    <!-- Bootstrap JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
