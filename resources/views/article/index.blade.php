<a href="{{route('article.show', compact('article'))}}" class="btn btn-info text-white"> Leer </a>


<a href="{{route('article.byCategory', ['category' => $article->category->id])}}" class="small text-muted fst-italic"> {{$article->category->name}} </a>

<a href="{{route('article.byUser', ['user' => $article->user->id])}}" class="small text-muted fst-italic"> {{$article->user->name}} </a>


<p class="small fst-italic">
    @foreach ($article->tags as $tag)
      #{{$tag->name}}
    @endforeach
  </p>
  @if($article->category)
  <a href="{{route('article.byCategory',['category'=>$article->category->id])}}" class="small text-muted fst-italic">
    {{$article->category->name}}</a>
  @else
  <p class="small text-muted fst-italic">
      Sin categoria
  </p>
  @endif
