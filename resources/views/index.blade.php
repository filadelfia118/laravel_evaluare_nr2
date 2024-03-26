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
<h1 class="text-center">Platformă de gestionare a proiectelor 
</h1>
<div class="container">
  <div class="row">
    <a href="{{ route('projects.create') }}" class="btn btn-success btn-sm my-3">Adauga</a>
    <div class="row">
      <h4>Lista proiectelor</h4>
      <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>#</th>
                <th>Nume</th>
                <th>Descriere</th>
                <th>Stare</th>
                <th>Start-date</th>
                <th>Optiuni</th>
              </tr>
            </thead>
          <tbody>
            @foreach($projects as $project)
            <tr>
              <td>{{$project->id}}</td>
              <td>{{$project->nume}}</td>
              <td>{{$project->descriere}}</td>
              <td>{{$project->stare}}</td>
              <td>{{$project->start_date}}</td>
              <td>
                <a href="{{route('projects.edit',['project'=> $project->id]) }}" class="btn btn-warning btn-sm">Edit</a>
                <a href="{{route('projects.show', ['project'=> $project->id]) }}" class="btn btn-info btn-sm">Show</a>

                <form action="{{route('projects.destroy',['project'=>$project]) }}" method="post">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger btn-sm my-3">Delete</button>
                </form>
                
              </td>
            </tr>
            @endforeach

          </tbody>
          </table>
      </div>
      

    </div>
  </div>
</div>
<footer>

</footer>

</body>
</html>