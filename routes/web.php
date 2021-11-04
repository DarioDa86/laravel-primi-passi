<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $data = [
        "marca" => "Fiat",
        "modello" => "Multipla",
        "punteggio" => "2.3/10",
        "testers" => [
            "Germano Mosconi",
            "Pupazzo Gnappo",
            "Aldo Giovanni e Giacomo"
        ]
    ];
    

    return view('home', $data);
});