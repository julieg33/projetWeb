@extends('template.templateAdmin', ['title' => 'Étudiants'])

@section('css')
    <link rel="stylesheet" type = "text/css" href ="{{url('css/rechercherEtudiant.css')}}">
@endsection

@section('content')
    <div class="card w-75 text-center  mx-auto mt-3" id="content">
        <div class="row">
            <div class="col">
                <label for="exampleInputEmail1">Nom :</label>
                <input type="email" class="form-control w-50 mx-auto">
                <label for="exampleInputEmail1">Prénom :</label>
                <input type="email" class="form-control w-50 mx-auto">
                <label for="exampleInputEmail1">Centre :</label>
                <input type="email" class="form-control w-50 mx-auto">
                <label for="exampleInputEmail1">Promotion :</label><br>
                <select class="custom-select w-50  " id="selectAvancement">
                    <option selected>Choose...</option>
                    <option value="1">1ère année</option>
                    <option value="2">2ème année</option>
                    <option value="3">3ème année</option>
                    <option value="3">4ème année</option>
                    <option value="3">5ème année</option>
                </select><br>
                <button type="button" class="btn btn-dark w-25 mt-3">Rechercher</button>

            </div>
            <div class="col">
                <button type="button" class="btn btn-success w-50 mt-5">Créer un nouvel étudiant</button>
            </div>
        </div>

        <div class="card mt-5 w-75 mx-auto">
            <div class="row">
                <div class="col">
                    <h5 class="card-title">[Nom][Prénom]</h5>
                    <p class="card-text">Centre de [Nom du centre]</p>                    
                    <p class="card-text">Promotion : [promotion]</p>
                </div>
                <div class="col text-right mt-4">
                    <button type="button" class="btn btn-dark w-25">Voir</button>
                    <button type="button" class="btn btn-success w-25">Modifier</button>
                    <button type="button" class="btn btn-danger w-25">Supprimer</button>
                </div>
            </div>
        </div>
    </div>
@endsection

<!--
    <div class="row mt-3">
            <div class="col-9 ">
                <div class="row ">
                    <div class="col-3"><h5 class="card-text text-right">Nom :</h5></div>
                    <div class="col-7"><input type="email" class="form-control form-control-sm w-25"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-3"><h5 class="card-text text-right">Prénom :</h5></div>
                    <div class="col-7"><input type="email" class="form-control form-control-sm w-25"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-3"><h5 class="card-text text-right">Centre :</h5></div>
                    <div class="col-7"><input type="email" class="form-control form-control-sm w-25"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-3"><h5 class="card-text text-right">Promotion :</h5></div>
                    <div class="col-7"><input type="email" class="form-control form-control-sm w-25"></div>
                </div>
                <div class=" mt-3 col-8">
                    <button type="submit" class="btn btn-dark w-25">Rechercher</button>
                </div>
            </div>
            <div class="col-3 ">
                <button type="submit" class="btn btn-success w-75 float-left">Créer un nouvel étudiant</button>
            </div>
        </div>
-->