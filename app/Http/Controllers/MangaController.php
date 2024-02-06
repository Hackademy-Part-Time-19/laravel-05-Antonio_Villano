<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MangaController extends Controller
{


        public function index(){

            $response = Http::get('https://api.jikan.moe/v4/genres/manga')->json();
            $generi =$response['data'];
            return view('manga_generi',['dati'=>$generi]);
        }
        public function byGenre($genre_id){
            $uri= 'https://api.jikan.moe/v4/manga?genres='.$genre_id;
            $mangas = Http::get($uri)->json()['data'];
            return view('manga_genere',compact('mangas'));
        }

        public function manga($id){
            $uri= 'https://api.jikan.moe/v4/manga/'.$id;
            $mangas = Http::get($uri)->json()['data'];
            return view('manga',compact('mangas'));
        }

}
