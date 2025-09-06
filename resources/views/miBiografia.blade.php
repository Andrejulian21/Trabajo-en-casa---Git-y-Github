<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portafolio - Julian Arteaga</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="/">Julian Arteaga</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('Biografia') }}">Biografía</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('Experiencia laboral') }}">Experiencia Laboral</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('Habilidades') }}">Habilidades</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('Academia') }}">Academia</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container text-center mt-5">
    <h1 class="mb-4">Julian Arteaga</h1>
    
    
    <div class="mb-4">
      <img src="{{asset('fotojulian.png')}}" alt="yo todo guapo" width="200" class="rounded-circle shadow">
    </div>

    <p class="lead">Bienvenido a mi portafolio personal.</p>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
