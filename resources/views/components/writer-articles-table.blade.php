<table class="table table-striped table-hover border">
    <thead class="table-dark">
    <tr>
    <th scope="col">#</th>
    <th scope="col">Título</th>
    <th scope="col">Subtítulo</th>
    <th scope="col">Categoría</th>
    <th scope="col">Tags</th>
    <th scope="col">Creado el</th>
    <th scope="col">Acciones</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($articles as $article)
    <tr>
    <th scope="row">{{$article->id}}</th>
    <td>{{$article>title}}</td>
    <td>{{$article->subtitle}}</td>
    <td>{{$article->category->name ?? 'Sin categoría'}}</td>
    <td>
    @foreach ($article->tags as $tag)
    {{$tag>name}},
    @endforeach
    </td>
    <td>{{$article->created_at-> format ('d/m/Y')}}</td>
    <td>
    <a href="{{route( 'article.show', compact('article'))}}" class="btn btn-info text-white">Leer</a>
    <a href="#" class="btn btn-warning text-white">Modificar</a>
    <form action="" method="" class="d-inline">
    @csrf
    <button type="submit" class="btn btn-danger">Eliminar</button>
    </form>
    </td>
    </tr>
    @endforeach
    </tbody>
    </table>
