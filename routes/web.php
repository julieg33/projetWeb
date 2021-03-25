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
    return view('welcome');
});

Route::get('/templateAdmin', function () {
    return view('templateAdmin');
});

Route::get('/templateEtudiant', function () {
    return view('templateEtudiant');
});

Route::get('/templatePilote', function () {
    return view('templatePilote');
});

Route::get('/unEleve', function () {
    return view('unEleve');
});

Route::get('/creerOffre', function () {
    return view('creerOffre');
});

Route::get('/wishList', function () {
    return view('wishList');
});

Route::get('/postuler', function () {
    return view('postuler');
});

Route::get('/mesEntreprises', function () {
    return view('mesEntreprises');
});

Route::get('/rechercherEtudiant', function () {
    return view('rechercherEtudiant');
});

Route::get('/rechercherPilote', function () {
    return view('rechercherPilote');
});

Route::get('/creerPilote', function () {
    return view('creerPilote');
});

Route::get('/uneOffre', function () {
    return view('uneOffre');
});

