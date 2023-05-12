<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    // creo le funzioni che richiamiamo dalle rotte

    public function index()
    {
        // devo prendere i dati dalla tabella del database db_train
        $trains = Train::all();

        $filteredTrains = $trains->where('date', '=', now()->format('Y-m-d'));

        // metodo ottimizzato
        // $train = Train::where('date', '=', now())->get();

        return view('home', compact('filteredTrains'));
    }
}
