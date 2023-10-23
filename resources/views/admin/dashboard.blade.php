<x-layout>

    <div class="container-fluid p-5 bg-info text-white text-center">
        <div class="row justify-content-center">
            <h1 class="display-1">
                Bienvenido, Administrador
            </h1>
        </div>
    </div>

    @if (session('message'))
    <div class="alert alert-success text-center">
        {{session( 'message')}}
    </div>
    @endif

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Solicitudes por función de administrador</h2>
                <x-requests-table :roleRequests="$adminRequests" role="administrador" />
            </div>
        </div>
    </div>


    <div class="container-fluid p-5 bg-info text-white">
        <div class="row justify-content-center">
            <h1 class="display-1">
                Bienvenido Revisor
            </h1>
        </div>
    </div>

    @if (session('message'))
    <div class="alert alert-success text-center">
        {{session( 'message')}}
    </div>
    @endif

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Articulos para revisar</h2>
                <x-articles-table :articles="$unrevisionedArticles"  />
            </div>
        </div>
    </div>


    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Articulos publicados</h2>
                <x-articles-table :articles="$acceptedArticles"  />
            </div>
        </div>
    </div>


    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Articulos rechazados</h2>
                <x-articles-table :articles="$rejectedArticles"  />
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Solicitudes por función de revisor</h2>
                <x-requests-table :roleRequests="$revisorRequests" role="revisor" />
            </div>
        </div>
    </div>





    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Solicitudes por función de redactor</h2>
                <x-requests-table :roleRequests="$writerRequests" role="redactor" />
            </div>
        </div>
    </div>


    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Categorias de la plataforma</h2>
                <x-metainfo-table : metaInfos="$categories" metaType="categorie" />
                <form action="" method="" class="d-flex"
                @csrf
                <input type="text" name="name" class="form-control me-2">
                <button type="submit" class="btn btn-success text-white">Actualizar</button>
                </form>
            </div>
        </div>
    </div>



    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Tags de la plataforma</h2>
                <x-metainfo-table : metaInfos="$tags" metaType="tags" />
            </div>
        </div>
    </div>


</x-layout>
