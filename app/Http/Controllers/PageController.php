<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PageController extends Controller
{
    public function home(){
        return view('home');
    }
    public function testApi(){
        return view('test');
    }
}
