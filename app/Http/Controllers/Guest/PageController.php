<?php

namespace App\Http\Controllers\Guest;

use App\Models\Movie;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


// CREARE UNA FUNZIONE PUBLICA (INDEX)
class PageController extends Controller
{
    public function index()
    {
        //CREO UNA VARIBILE E GLI PASSO IL VALORE DEL DB
        $movies = Movie::all();
        /* dd($movies); */
        //PASSO IL VALORE DELLA VARIABILE IN HOME (COMPACT)
        return view('home', compact('movies'));
    }
}
