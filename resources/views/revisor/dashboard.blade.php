<x-layout>

    <div class="container-fluid p-5 bg-info text-white text-center">
        <div class="row justify-content-center">
            <h1 class="display-1">
                Bienvenido, Revisor
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
                <h2>Artículos para revisar</h2>
                <x-articles-table :articles="$unrevisionedArticles" />
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Artículos publicados</h2>
                <x-articles-table :articles="$acceptedArticles" />
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Artículos rechazados</h2>
                <x-articles-table :articles="$rejectedArticles" />
            </div>
        </div>
    </div>


    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Categorias de la plataforma</h2>
                <x-metainfo-table : metaInfos="$categories" metaType="categorie" />
                <form action="" method="" class="d-flex" @csrf <input type="text" name="name" class="form-control me-2">
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
