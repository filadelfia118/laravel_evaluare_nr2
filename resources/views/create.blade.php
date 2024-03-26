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


      <form action="{{route('projects.store') }}" method="post" class="mt-4">
        @csrf
        <div class="mb-3">
          <input type="text"  name="nume" class="form-control" placeholder="Nume">

          @error('nume')
              <div class="alert text-danger">{{ $message }}</div>
          @enderror

        </div>
        <div class="mb-3">
          <input type="text"  name="descriere" class="form-control" placeholder="Descriere">
          @error('descriere')
              <div class="alert text-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
            <label for="stare">Stare:</label>
            <select class="form-control" id="stare" name="stare" required>
                <option value="draft">Draft</option>
                <option value="in_progres">În curs de dezvoltare</option>
                <option value="finalizat">Finalizat</option>
            </select>
          @error('stare')
              <div class="alert text-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
          <input type="date" step="0.0"  name="start_date" class="form-control" placeholder="Date">
          @error('start_date')
              <div class="alert text-danger">{{ $message }}</div>
          @enderror
        </div>
        <button type="submit" class="btn btn-dark btn-sm">Salveaza</button>

      </form>

    </div>
  </div>
</div>
<footer>

</footer>

</body>
</html>