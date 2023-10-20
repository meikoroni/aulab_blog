<table class="table table-striped table-hover border">
  <thead class="table-dark">
    <tr>
        <th scope="col">#</th>
        <th scope="col">Titulo</th>
        <th scope="col">Subtitulo</th>
        <th scope="col">Redactor</th>
        <th scope="col">Accion</th>
    </tr>
  </thead>


<tbody>
    @foreach ($articles as $article )
<tr>
    <th scope="row">{{$article->id}}</th>
    <td>{{$article->title}}</td>
    <td>{{$article->subtitle}}</td>
    <td>{{$article->user->name}}</td>
    <td>
       @if (is_null($article->is_accepted))
       <a href="{{route('article.show', compact('article'))}}"class= "btn btn-info text-white">Leer articulo</a>
       @else
       <a href="{{route('revisor.undoArticle', compact('article'))}}"class= "btn btn-info text-white">Informe de revision</a>
       @endif
    </td>
</tr>
    @endforeach
</tbody>
</table>
