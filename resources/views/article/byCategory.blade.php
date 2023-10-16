
<x-layout>

<div class="container-fluid p-5 bg-info text-center text-white">
    <div class="row justify-content-center">
    <h1 class="display-1">
    Categoría {{ $category ->name}}
    </h1>
    </div>
    </div>

    <div class="container my-5">
    <div class="row justify-content-around">
    @foreach ($articles as $article)
    <div class="col-12 col-md-3">
    <div class="card">

    <img src="{{Storage ::url($article—>image)}}" class="card-img-top" alt="...

    <div class="card-body">
    <h5 class="card-title">{{$article->title}}</h5>
    <p class="card-text">{{$article->subtitle}}</p>

    </div>

    <div class="card-footer text-muted d-flex justify-content-between align-items-center">
    Publicado el {{$article->created_at-format('d/m/Y')}} por {{$article->user->name}}


    <a href="{{route( 'article.show',compact('article'))}}" class="btn btn-info text-white">Leer</a>
    </div>
    </div>
</div>
@endforeach
</div>
</div>
</x-layout>
