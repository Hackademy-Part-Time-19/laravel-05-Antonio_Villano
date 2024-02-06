<x-layout>
    <x-slot:title>manga</x-slot>
    <div class="container">
        <div class="row">

            <h1>manga di genere:</h1>
            @foreach ($mangas as $manga )
            <div class="mt-5 col-lg-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{$manga['images']['jpg']['image_url']}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$manga['title']}}</h5>
                        <p class="card-text">{{Str::limit($manga['synopsis'],50)}}</p>
                        <a href="{{route('manga.byId',['id'=>$manga['mal_id']])}}" class="btn btn-primary">Complete Article</a>
                    </div>
                </div>
            </div>

            @endforeach

        </div>
    </div>

</x-layout>