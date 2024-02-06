<x-layout>
    <x-slot:title>manga</x-slot>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h1>Lista Generi manga</h1>
                <ul>
                    @foreach ($dati as $manga )
                    <li>
                        <a href="{{route('manga.genre',['genre_id'=>$manga['mal_id']])}}">{{$manga['name']}}</a>
                    </li>

                    @endforeach

                </ul>
            </div>
        </div>
    </div>

</x-layout>