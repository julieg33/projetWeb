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

/*----------------------------------------DEBUT ROUTES D ACCES AUX PAGES----------------------------------------*/


/*----------Offre----------*/

Route::get('/creerOffre', function () {
    return view('creerOffre');
});

Route::get('/uneOffre', function () {
    return view('uneOffre');
});

Route::get('/mesOffres', function () {
    return view('mesOffres');
});

Route::get('/postuler', function () {
    return view('postuler');
});

Route::get('/rechercherOffre', function () {
    return view('rechercherOffre');
});

Route::get('/modifierOffre', function () {
    return view('modifierOffre');
});

/*----------Entreprise----------*/

Route::get('/mesEntreprises', function () {
    return view('mesEntreprises');
});

Route::get('/rechercherEntreprise', function () {
    return view('rechercherEntreprise');
});

Route::get('/uneEntreprise', function () {
    return view('uneEntreprise');
});

Route::get('/evaluerEntreprise', function () {
    return view('evaluerEntreprise');
});

Route::get('/creerEntreprise', function () {
    return view('creerEntreprise');
});

Route::get('/modifierEntreprise', function () {
    return view('modifierEntreprise');
});

/*----------Eleve----------*/

Route::get('/unEleve', function () {
    return view('unEleve');
});

Route::get('/rechercherEtudiant', function () {
    return view('rechercherEtudiant');
});

Route::get('/creerEtudiant', function () {
    return view('admin/etudiant/creerEtudiant');
});

Route::get('/modifierEtudiant', function () {
    return view('modifierEtudiant');
});

/*----------Délégué----------*/

Route::get('/unDelegue', function () {
    return view('unDelegue');
});

Route::get('/droitDelegue', function () {
    return view('droitDelegue');
});

Route::get('/rechercherDelegue', function () {
    return view('rechercherDelegue');
});

Route::get('/modifierDelegue', function () {
    return view('modifierDelegue');
});

/*----------Pilote----------*/

Route::get('/rechercherPilote', function () {
    return view('rechercherPilote');
});

Route::get('/creerPilote', function () {
    return view('creerPilote');
});


Route::get('/modifierPilote', function () {
    return view('modifierPilote');
});

/*----------Autre----------*/

Route::get('/wishList', function () {
    return view('wishList');
});

Route::get('/mesDemandes', function () {
    return view('mesDemandes');
});

Route::get('/authentification', function () {
    return view('authentification');
});

/*----------------------------------------FIN ROUTES D ACCES AUX PAGES----------------------------------------*/
