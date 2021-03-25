@extends('template.templateAdmin', ['title' => 'Étudiant'])

@section('content')

    <div class="card w-75 text-center  mx-auto mt-3">
        <h4 class='card-header text-center'> [Nom] [Prenom]</h4>
        <div class="card-body ml-5">
            <p class="card-text">Mail : [inserer Mail]</p>
            <p class="card-text">Centre : [inserer Centre]</p>
            <p class="card-text">Promotion : [inserer Promotion]</p>
        </div>
        <div class="card w-75 text-center  mx-auto mt-3">
            <h5 class="card-header etudiant">[Nom de l'offre] par [Nom de l'entreprise]</h5>
            <div class="input-group mt-3 mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text">Avancement</label>
                </div>
                <select class="custom-select " >
                    <option selected>Choose...</option>
                    <option value="1">En attente d'une réponse</option>
                    <option value="2">Réponse positive</option>
                    <option value="3">Réponse négative</option>
                    <option value="3">Fiche de validation émise par l'entreprise</option>
                    <option value="3">Fiche de validation signée par le pilote</option>
                    <option value="3">Conventions émises à l'entreprise</option>
                    <option value="3">Conventions signées</option>
                </select>
                <button type="button" class="btn btn-success center-block">Valider</button>
            </div>
        </div>        
    </div>  

@endsection


