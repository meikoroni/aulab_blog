
<x-layout>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mi Blog</title>

    </head>
    <body>
        <div class="bg-light">
            <div class="container py-5">
                <h1 class="display-4 text-center">Bienvenido a Pixel Art</h1>
                <p class="lead text-center">Explora el mundo del arte.</p>

                <div class="row mt-5">
                    <!-- Entrada de Blog 1 -->
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img src="{{ asset('images/imagen4.jpg') }}" alt="Imagen 4" class="img-thumbnail">
                            <div class="card-body">
                                <h5 class="card-title">Historia sobre el arte</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                {{-- <a href="{{ route('article.show', compact('article')) }}" class="btn btn-info text-white">Leer</a> --}}


                            </div>
                        </div>
                    </div>

                    <!-- Entrada de Blog 2 -->
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img src="{{ asset('images/imagen2.jpg') }}" alt="Imagen 2" class="img-thumbnail">
                            <div class="card-body">
                                <h5 class="card-title">Articulos recomendados</h5>
                                <p class="card-text">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <a href="#" class="btn btn-primary">Leer más</a>
                            </div>
                        </div>
                    </div>

                    <!-- Entrada de Blog 3 -->
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img src="{{ asset('images/imagen5.jpg') }}" alt="Imagen 5" class="img-thumbnail">
                            <div class="card-body">
                                <h5 class="card-title">Articulos de Autor</h5>
                                <p class="card-text">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                                <a href="#" class="btn btn-primary">Leer más</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


</x-layout>
