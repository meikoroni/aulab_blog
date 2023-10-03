<!-- resources/views/navbar.blade.php -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><img src="{{ asset('images/logo.png') }}" alt="Logo" width="150" height="150"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Arte <span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Diseño</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Fotografía</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Craft</a>

                <li class="nav-item">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Comunidad
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Articulos</a></li>
                    <li><a class="dropdown-item" href="#">Subir Articulos</a></li>
                    <li><a class="dropdown-item" href="#">Registrate</a></li>
            </li>
        </ul>
    </div>
    <li class="nav-item mx-3">
        a class="nav-link" href="{{route('article.create')}}">crear un articulo</a>
    </li>
</nav>




