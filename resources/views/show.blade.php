<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evaluare_nr2</title>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Proiecte</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('projects.index')}}">Proiecte</a>
        </li>
       
      </ul>
    </div>
  </div>
</nav>
<div class="container">
  <div class="row">
    <div class="col-md-6 m-auto">
      <h5>Detaliile proiectului :{{$project->id}}</h5>
      <h3>Nume: {{$project->nume}}</h3>
      <h3>Descriere: {{$project->descriere}}</h3>
      <h3>Stare:{{$project->stare}}</h3>
      <h3>Data: {{$project->start_date}}</h3>
      

    </div>
  </div>
</div>
<footer>

</footer>

</body>
</html>