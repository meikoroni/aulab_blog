<x-layout>
    <div class=" container-fluid p-5 bg-warning text-center text-white flex-column mb-4">
        <div class="row justify-content-center">
            <h1 class="display-1">
                PíxelArt
            </h1>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-around">
            @foreach ($articles as $article)
            <div class="col-12 col-md-3">
                <div class="card">
                    <form method="POST" action="{{ route('article.store') }}">
                        @csrf

                        @if(session('message'))
                        <div class="alert alert-success text-center">
                            {{session('message')}}
                        </div>
                        @endif
                        <img src="{{Storage :: url ($article->image)}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$article->title}}</h5>
                            <p class="card-text">{{$article->subtitle}}</p>
                            <p class="small text-muted fst-italic">{{$article->category->name}}</p>
                        </div>
                        <div class="card-footer text-muted d-flex justify-content-between align-items-center">
                            Publicado el {{$article->created_at->format('d/m/Y')}} por {{$article->user->name}}
                            <a href="{{route('article.show', compact('article'))}}" class="btn btn-info text-white">Leer</a>
                        </div>

                    </form>
                    <div class="mt-2">
                        <a href="{{route ('article.byCategory',['category' => $article->category->id])}}" class="small text-muted fst-italic">
                            {{ $article->category->name }}
                        </a>
                        <a href="{{ route('article.byUser', ['user' => $article->user->id]) }}" class="small text-muted fst-italic">
                            {{ $article->user->name }}
                        </a>
                    </div>
                </div>
            </div>

            @if($article->category)
            <a href="{{route('article.byCategory',['category'=>$article->category->id])}}" class="small text-muted fst-italic">
              {{$article->category->name}}</a>
            @else
            <p class="small text-muted fst-italic">
                Sin categoria
            </p>
            @endif

            @endforeach
        </div>
    </div>

</x-layout>
