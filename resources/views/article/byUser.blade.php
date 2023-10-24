<x-layout>
    <div class="container-fluid p-5 bg-info text-center text-white">
        <div class="row justify-content-center">
            <h1 class="display-1">
                Usuario {{ $user ->name}}
            </h1>
        </div>
        <div class="container my-5">
            <div class="row justify-content-around">
                @foreach ($articles as $article)
                <div class="col-12 col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{$article->title}}</h5>
                            <p class="card-text">{{$article->subtitle}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-layout>
