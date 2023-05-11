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


        return view('home');
    }
}
