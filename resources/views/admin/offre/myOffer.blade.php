@extends('template.templateAdmin', ['title' => 'Mes offres'])

@section('css')
    <link rel="stylesheet" type = "text/css" href ="{{url('css/rechercherEtudiant.css')}}">
@endsection

@section('content')

    <div class="card w-75 text-center  mx-auto mt-3" id="content">
        <div class="row mt-3">
            <div class="col">
                <label>Titre :</label>
                <input type="text" class="form-control w-50 mx-auto">
                <label>Entreprise :</label>
                <input type="text" class="form-control w-50 mx-auto">
                <button type="button" class="btn btn-dark w-25 mt-3">Rechercher</button>
            </div>
            <div class="col">
                <a type="button" class="btn btn-success w-50 mt-5" href ="{{ url('/creerOffre') }}">Créer une nouvelle offre</a>
            </div>
        </div>
        <div class="card mt-5 w-75 mx-auto">
            <div class="row">
                <div class="col">
                    <h5 class="card-title">[Titre de l'offre]</h5>
                    <p class="card-text">[Nom de l'entreprise]</p>  
                </div>
                <div class="col text-right mt-4">
                    <a type="button" class="btn btn-dark w-25" href ="{{ url('/uneOffre') }}">Voir</a>
                    <a type="button" class="btn btn-warning w-25" href ="{{ url('/modifierOffre') }}">Modifier</a>
                    <button type="button" class="btn btn-danger w-25">Supprimer</button>
                </div>
            </div>
        </div>
    </div>

@endsection
