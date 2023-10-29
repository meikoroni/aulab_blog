<x-layout>
    <div class="container-fluid p-5 bg-info text-center text-white">
        <div class="row justify-content-center">
            <h1 class="display-1">
                Detalles del Artículo
            </h1>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <div class="card p-5 shadow">

                    <div class="mb-3">
                        <label for="title" class="form-label">Título:</label>
                        <p>{{ $article->title }}</p>
                    </div>
                    <div class="mb-3">
                        <label for="subtitle" class="form-label">Subtítulo:</label>
                        <p>{{ $article->subtitle }}</p>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label"></label>
                        <img src="{{ Storage::url($article->image) }}" alt="Imagen del Artículo"
                            class="img-fluid mb-2">
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Categoría:</label>
                        <p>{{ $article->category->name }}</p>
                    </div>
                    <div class="mb-3">
                        <label for="body" class="form-label">Cuerpo del Texto:</label>
                        <p>{{ $article->body }}</p>
                    </div>
                    <p class="small fst-italic">
                        @foreach ($article->tags as $tag)
                          #{{$tag->name}}
                        @endforeach
                      </p>


                    <div class="mt-2">
                         <a href="{{ route('article.edit', $article->id)
                            class="btn btn-warning text-white">Editar artículo</a>}}"
                         <a href="{{ route('homepage') }}" class="btn btn-outline-info">Volver a inicio</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
@if (Auth::user()&& Auth::user()->is_revisor)
<a href="{{route('revisor.acceptArticle', compact('article'))}}" class="btn btn-sucess text-white my-5">Aceptar</a>
<a href="{{route('revisor.rejectArticle', compact('article'))}}" class="btn btn-sucess text-white my-5">Rechazar</a>
@endif

</x-layout>




















