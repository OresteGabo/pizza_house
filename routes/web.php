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

    $pizzas =[
        'type'=> 'Hawaian',
        'base' => 'Cheesy crust',
        'price' =>  10,
    ];


    return view('welcome',$pizzas);
});

Route::get('/pizzas  ', function () {
    $name=request('name');
    $pizzas =[
        'type'=> 'Hawaian',
        'base' => 'Cheesy crust',
        'price' =>  10,
        'name' => $name,
    ];
    return view('pizzas',$pizzas);
});

Route::get('/adherent  ', function () {
    $adherents =[
        ['nom'=> 'Nom 1', 'prenom' => 'Prénom 1', 'age' =>  21],
        ['nom'=> 'Nom 2', 'prenom' => 'Prénom 2', 'age' =>  22],
        ['nom'=> 'Nom 3', 'prenom' => 'Prénom 3', 'age' =>  23],
        ['nom'=> 'Nom 4', 'prenom' => 'Prénom 4', 'age' =>  24],
        ['nom'=> 'Nom 5', 'prenom' => 'Prénom 5', 'age' =>  25],
        ['nom'=> 'Nom 6', 'prenom' => 'Prénom 6', 'age' =>  26],
        ['nom'=> 'Nom 7', 'prenom' => 'Prénom 7', 'age' =>  27],
        ['nom'=> 'Nom 8', 'prenom' => 'Prénom 8', 'age' =>  28],
        ['nom'=> 'Nom 9', 'prenom' => 'Prénom 9', 'age' =>  29],
        ['nom'=> 'Nom 10', 'prenom' => 'Prénom 10', 'age' =>  30]
    ];

    return view('adherent',['adherents'=>$adherents]);
});

Route::get('/adherent/{id} ', function ($id) {
    //the $id will be used to query the database for a record
    return view('details',$id);
});
