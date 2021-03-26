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
    return view('admin/offre/create');
});

Route::get('/uneOffre', function () {
    return view('admin/offre/show');
});

Route::get('/mesOffres', function () {
    return view('admin/offre/myOffer');
});

Route::get('/postuler', function () {
    return view('admin/offre/postulate');
});

Route::get('/rechercherOffre', function () {
    return view('admin/offre/index');
});

Route::get('/modifierOffre', function () {
    return view('admin/offre/edit');
});

/*----------Entreprise----------*/

Route::get('/mesEntreprises', function () {
    return view('admin/entreprise/myCompany');
});

Route::get('/rechercherEntreprise', function () {
    return view('admin/entreprise/index');
});

Route::get('/uneEntreprise', function () {
    return view('admin/entreprise/show');
});

Route::get('/evaluerEntreprise', function () {
    return view('admin/entreprise/evaluate');
});

Route::get('/creerEntreprise', function () {
    return view('admin/entreprise/create');
});

Route::get('/modifierEntreprise', function () {
    return view('admin/entreprise/edit');
});

/*----------Eleve----------*/

Route::get('/unEtudiant', function () {
    return view('admin/etudiant/show');
});

Route::get('/rechercherEtudiant', function () {
    return view('admin/etudiant/index');
});

Route::get('/creerEtudiant', function () {
    return view('admin/etudiant/create');
});

Route::get('/modifierEtudiant', function () {
    return view('admin/etudiant/edit');
});

/*----------Délégué----------*/

Route::get('/unDelegue', function () {
    return view('admin/delegue/show');
});

Route::get('/droitDelegue', function () {
    return view('admin/delegue/entitlement');
});

Route::get('/rechercherDelegue', function () {
    return view('admin/delegue/index');
});

Route::get('/modifierDelegue', function () {
    return view('admin/delegue/edit');
});

/*----------Pilote----------*/

Route::get('/rechercherPilote', function () {
    return view('admin/pilote/index');
});

Route::get('/creerPilote', function () {
    return view('admin/pilote/create');
});


Route::get('/modifierPilote', function () {
    return view('admin/pilote/edit');
});

/*----------Autre----------*/

Route::get('/wishList', function () {
    return view('admin/autre/wishList');
});

Route::get('/mesDemandes', function () {
    return view('admin/autre/myRequest');
});

Route::get('/authentification', function () {
    return view('admin/autre/authentification');
});

/*----------------------------------------FIN ROUTES D ACCES AUX PAGES----------------------------------------*/
