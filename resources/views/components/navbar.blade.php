<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top ">
    <a class="navbar-brand" href="#"><img src="{{ asset('images/logo.png') }}" alt="Logo" width="150" height="150"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
            </li>
            @auth
            <li class="nav-item">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Bienvenido {{ Auth::user()->name }}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a href="" class="dropdown-item">Perfil</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a href="#" class="dropdown-item"
                            onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Salir</a>
                    </li>
                    <form action="{{ route('logout') }}" method="post" id="form-logout" class="d-none">
                        @csrf
                    </form>
                </ul>
            </li>
            @endauth
            @guest
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" id="navbarDropdow" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">Bienvenido Invitado</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a href="{{ route('register') }}" class="dropdown-item">Registrarse</a></li>
                    <li><a href="{{ route('login') }}" class="dropdown-item">Iniciar Sesión</a></li>
                </ul>
            </li>
            @endguest
            <li class="nav-item mx-3">
                <a class="nav-link" href="{{route('article.create')}}">Crear un articulo</a>
            </li>
        </ul>
    </div>
</nav>
