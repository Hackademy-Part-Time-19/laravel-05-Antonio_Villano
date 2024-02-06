<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public $articles =[
        0=>['titolo'=>'articolo 1','descrizione'=>'descrizione di prova 1','autore'=>'Marco Rossi','categoria'=>'sport'],
        1=>['titolo'=>'articolo 2','descrizione'=>'descrizione di prova 2','autore'=>'Roberto Bianchi','categoria'=>'cultura'],
        2=>['titolo'=>'articolo 3','descrizione'=>'descrizione di prova 3','autore'=>'Carlo Neri','categoria'=>'film'],
        3=>['titolo'=>'articolo 4','descrizione'=>'descrizione di prova 4','autore'=>'Michele Verdi','categoria'=>'elettronica'],
        ['titolo'=>'articolo 5','descrizione'=>'descrizione di prova 5','autore'=>'Laura Grigi','categoria'=>'sport'],
    ];
    public function articoli(){
        return $this->articles;
        

    }
}
