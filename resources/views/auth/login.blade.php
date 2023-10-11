<x-layout>
<div class="container-fluid p-5 bg-info text-center text-white">
        <div class="row justify-content-center">
            <h1 class="display-1">
                Iniciar sesión
            </h1>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>

                @endif

                <form class="card p-5 shadow" action="{{route('login')}}" method="post">
                    @csrf

                    <div class="mb-3">
                        <label for="username" class="form-label">Nombre: </label>
                        <input name="name" type="text" class="form-control" value="{{old('name')}}">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo: </label>
                        <input name="email" type="email" class="form-control" value="{{old('email')}}">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña: </label> <input name="password"
                            type="password" class="form-control" value="{{old('password')}}">
                    </div>
                    <div class="mt-2">
                        <button class="btn bg-info text-white">Iniciar sesión</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
