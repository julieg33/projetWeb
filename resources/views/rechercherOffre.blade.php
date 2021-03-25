@extends('template.templateAdmin', ['title' => "Nos offres"])

@section('css')
<link rel="stylesheet" type = "text/css" href ="{{url('css/creerOffre.css')}}">
@endsection

@section('content')
<div class="row">
    <div class="col-3">
        <div class="card  w-75 text-center  mx-auto mt-3">
            <div class="card-header text-center">
                <h5>Filtres :</h5>
            </div>
            <div class="card-body">
                <p class="text-left mt-2">Compétences :</p>
                <input type="text" class="form-control">
                <p class="text-left mt-2">Localité :</p>
                <input type="text" class="form-control">
                <p class="text-left mt-2">Entreprise :</p>
                <input type="text" class="form-control">
                <p class="text-left mt-2">Promotion :</p>
                <select class="custom-select " id="selectAvancement">
                    <option selected>Choose...</option>
                    <option value="1">1ère année</option>
                    <option value="2">2ème année</option>
                    <option value="3">3ème année</option>
                    <option value="3">4ème année</option>
                    <option value="3">5ème année</option>
                </select>
                <p class="text-left mt-2">Durée du stage :</p>
                <input type="text" class="form-control">
                <p class="text-left mt-2">Base de rémunération(/h) :</p>
                <input type="number" class="form-control" step="0.01" >
                <p class="text-left mt-2">Date de l'offre :</p>
                <input type="date" class="form-control">
                <p class="text-left mt-2">Nombre de place :</p>
                <input type="number" class="form-control">
                <button type="button" class="btn btn-dark mt-4 w-100">Rechercher</button>
            </div>
        </div>
    </div>
    <div class="col-9">
        <div class="card  mt-3">
            <div class="card-header text-left">
                <h5>Résultats :</h5>
            </div>
            <div class="card-body">
                <div class="card  mt-3 mb-3">        
                    <div class="card-body" >
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-left">[Titre de l'offre]</h5>
                                    <p class="card-text text-left">par [Nom de l'entreprise]</p>
                                </div>
                                <div class="col text-right">
                                    <button type="button" class="btn btn-success">Voir l'offre</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>
	



@endsection