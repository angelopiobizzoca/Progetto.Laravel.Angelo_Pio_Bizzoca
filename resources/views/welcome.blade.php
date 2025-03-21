<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">Navbar</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href='/seconda-pagina'>Seconda Pagina</a>
                      </li>
                    </ul>
                    <form class="d-flex" role="search">
                      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-outline-primary" type="submit">Search</button>
                    </form>
                  </div>
                </div>
              </nav>
            </div>
        </div>
    </div>
    <h1 class="text-center">Un mondo di musica</h1>
    <h2 class="text-center">Immergiti nel mondo della musica</h2>
    <div class="container-fluid">
      <div class="row mt-3">
        @foreach ($albums as $album)
        <div class="col-12 col-md-3">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{$album['img']}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">{{$album['title']}} {{$album['id']}}</h5>
              <p class="card-text">{{$album['description']}}</p>
              <a href="{{route('pagina-dettaglio', ['id' =>$album['id']])}}" class="btn btn-primary">Click here</a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
    


























    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>