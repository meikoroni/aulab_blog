<x-layout>
    <div class=" container-fluid p-4 bg-warning text-center text-white flex-column mb-4">
        <div class="row justify-content-center">
            <h1 class="display-8">
                PíxelArt. Tu Blog sobre Arte.
            </h1>
            {{-- <a href="{{route('article.show', compact('article'))}}" class="btn btn-info text-white"> Leer </a> --}}
        </div>
    </div>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Blog</title>
    <style>
        .container {
            display: flex;
            flex-direction: row;
            margin: 20px;
        }

        .left-content {
            flex: 1;
            padding: 20px;
            background-color: #e8e9f9;
        }

        .right-image {
            flex: 1;
            display: flex;
            justify-content: flex-end;
        }

        .text {
            padding: 20px;
        }
    </style>
</head>
<body>




    <div class="container">
        <div class="left-content">
            <h2>Arte y el mundo comtemporaneo</h2>
            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci in delectus minus necessitatibus sed eligendi soluta sint quaerat et voluptatem blanditiis accusamus aliquam quae sequi nihil, praesentium est ratione impedit.</p>
        </div>
        <div class="right-image">
            <img src="{{ asset('images/imagen4.jpg') }}" alt="Imagen 4"class="img-thumbnail img-fluid">
        </div>
    </div>

    <div class="container">

        <div class="left-image">
            <img src="{{ asset('images/imagen9.jpg') }}" alt="Imagen 9"class="img-thumbnail img-fluid">


        </div>
        <div class="right-content">
            <h2>El Arte de la Ilustración: Creando Mundo Visuales</h2>
            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci in delectus minus necessitatibus sed eligendi soluta sint quaerat et voluptatem blanditiis accusamus aliquam quae sequi nihil, praesentium est ratione impedit.</p>
        </div>
    </div>

    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src= "{{ asset('images/imagen6.jpg') }}"class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/imagen7.jpg') }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src= "{{ asset('images/imagen8.jpg') }}"class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>


      <p class="fs-3 text-center">La Mujer como Artista: Rompiendo Barreras en la Historia del Arte
      </p>
      <p class="fw-bold text-center">Artistas femeninas</p>
      <p class="text-center">A lo largo de la historia del arte, el papel de la mujer como creadora y artista ha sido, en muchos aspectos, subestimado y pasados por alto. Sin embargo, a pesar de las barreras sociales y culturales que han enfrentado, las mujeres han desempeñado un papel fundamental en la evolución y el enriquecimiento del mundo del arte.

        En épocas pasadas, el acceso de las mujeres al mundo de la creación artística estaba restringido por normas sociales que las relegaban a roles más tradicionales. A menudo se las excluía de las academias de arte y se les desalentaba a tomar un lugar en la escena artística. No obstante, algunas mujeres talentosas desafiaron estas limitaciones y dejaron una marca indeleble en la historia del arte.</p>







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


    </body>
    </html>


</x-layout>
