<x-layout>
<div class="container-fluid p-5 bg-info text-center text-white">
<div class="row justify-content-center">
   <h1 class="display-1">
   Todos los artículos por: {{$query}}
   </h1>
</div>
</div>

<div class="container my-5">
<div class="row justify-content-around">
@foreach ($articles as $article)
<div elass="col-12 col-md-3 my-2">
<div class="card">
<img src="{{Storage ::url($article->image)}}"alt="..." class="card-img-top">

<div class="card-body">
<h5 class="card-title">{{$article->title}}</h5>
<p class="card-text">{{$article—>subtitle}}</p>
<a href="{{route( 'article.byCategory', ['category' => $article->category ->id])}}" class="small text-muted fst-italic">
{{$article->category ->name}}</a>
</div>



<div class="card-footer text-muted d-flex justify-content-between align-items-center">
<a href="{{route('article.byUser', ['user' => $article->user->id])}}"> Escrito el {{$article->created_at->format('d/m/Y')}} por{{$article->user->name}}</a>

<a href="{{route('article.show', compact('article'))}}” class="btn btn-info text-white" >Leer</a>
</div>
</div>
</div>

@endforeach
</div>
</div>

</x-layout>
