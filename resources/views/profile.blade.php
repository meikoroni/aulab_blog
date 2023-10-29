
<x-layout>

    <div class="container mt-5 custom">
        <h1>Mi Perfil</h1>

        <div class="row">
            <div class="col-md-6">
                <h2>Información personal</h2>
                <!-- Agrega más detalles según tus necesidades -->
                <p>Nombre: {{ Auth::user()->name }}</p>
                <p>Email: {{ Auth::user()->email }}</p>
                <!-- Agrega más detalles según tus necesidades -->

                <h2>Información adicional</h2>
                <p>Si hay algo que debamos saber....</p>
                <!-- Agrega más detalles según tus necesidades -->
            </div>

            <div class="col-md-6">
                <!-- Agrega una sección de galería de imágenes aquí -->
                <h2>Galería de articulos</h2>
                <div class="row">
                    <div class="col-4">
                        <img src="{{ asset('images/imagen1.jpg') }}" alt="Imagen 1" class="img-thumbnail">
                    </div>
                    <div class="col-4">
                        <img src="{{ asset('images/imagen2.jpg') }}" alt="Imagen 2" class="img-thumbnail">
                    </div>
                    <div class="col-4">
                        <img src="{{ asset('images/imagen3.jpg') }}" alt="Imagen 3" class="img-thumbnail">
                    </div>
                    <!-- Agrega más imágenes según sea necesario -->
                </div>
            </div>
        </div>
    </div>
</x-layout>


