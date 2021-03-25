@extends('template.templateAdmin', ['title' => "Mes demandes"])

@section('css')
<link rel="stylesheet" type = "text/css" href ="{{url('css/creerOffre.css')}}">
@endsection

@section('content')

<div class="card w-75 text-center  mx-auto mt-3">
        <h5 class="card-header etudiant">[Nom de l'offre] par [Nom de l'entreprise]</h5>
        <div class="input-group mt-3 mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="selectAvancement">Avancement</label>
            </div>
            <select class="custom-select " id="selectAvancement">
                <option selected>Choose...</option>
                <option value="1">En attente d'une réponse</option>
                <option value="2">Réponse positive</option>
                <option value="3">Réponse négative</option>
                <option value="3">Fiche de validation signée par le pilote</option>
            </select>
            <button type="button" class="btn btn-dark center-block" id="valider">Valider</button>
        </div>
    </div>

    


@endsection