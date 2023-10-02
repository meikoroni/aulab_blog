@auth


<li class="nav-item dropdown">

<a href="#" class="nav-link dropdown-toggle" id="navbarDropdow" role="button" data-bs-toggle="dropdown" aria-expanded="false">
Bienvenido {{Auth ::user()->name}}
</a>

<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
<li><a href="" class="dropwdown-item">Perfil</a></li>
<li><hr class="dropdown-divider"></li>
<li><a href="#" class="dropwdown-item" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Salir</a></li>

<form action="{{route('logout"')}}" method="post" id="form-logout" class="d-none">
@csrf
</form>
</ul>
<li>
@endauth

@guest
<li class="nav-item dropdown">
<a href="#" class="nav-link dropdown-toggle" id="navbarDropdow" role="button" data-bs-toggle="dropdown" aria-expanded="false">Bienvenido Invitado!</a>

<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
<li><a href="{{route('register')}}" class="dropdown-item">Registrarse</a></li>
<li><a href="{{route('login')}}" class="dropdown-item">Iniciar Sesión</a></li>
</ul>
<li>

@endguest
