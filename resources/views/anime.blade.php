<x-layout>
    <x-slot:title>{{$anime['title']}}</x-slot>
        <div class="row">
            <div class=" mt-5 col-lg-8">
                <div class="card" style="max-width: 18rem" >
                    <img src="{{$anime['images']['jpg']['image_url']}}" class="card-img-top" alt="...">
                </div>
                <div class="mt-5 col-lg-8">

                    <div class="card-body">
                        <h5 class="card-title">{{$anime['title']}}</h5>
                        <p class="card-text">{{$anime['synopsis']}}</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>