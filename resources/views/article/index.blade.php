<a href="{{route('article.show', compact('article'))}}" class="btn btn-info text-white"> Leer </a>
<a href="{{route('article.byCategory', ['category' => $article->category->id])}}" class="small text-muted fst-italic"> {{$article->category->name}} </a>

<a href="{{route('article.byUser', ['user' => $article->user->id])}}" class="small text-muted fst-italic"> {{$article->user->name}} </a>
