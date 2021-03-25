@extends('template.templateAdmin', ['title' => "Attribution des droits au délégué"])

@section('css')
<link rel="stylesheet" type = "text/css" href ="{{url('css/creerOffre.css')}}">
@endsection

@section('content')

<div class="card w-75 text-center  mx-auto mt-3" id="content">

    <div class="card-body">
        <div class="row">
            <div class="col-6">
                <label for="exampleInputEmail1">Nom :</label>
                <input type="text" class="form-control w-50 mx-auto" placeholder="[Nom]" readonly>
                <label for="exampleInputEmail1">Prénom :</label>
                <input type="text" class="form-control w-50 mx-auto" placeholder="[Prénom]" readonly>
                <label for="exampleInputEmail1">Centre :</label>
                <input type="email" class="form-control w-50 mx-auto" placeholder="[Centre]" readonly>
                <label for="exampleInputEmail1">Promotion assignée :</label><br>
                <input type="email" class="form-control w-50 mx-auto" placeholder="[Promotion assignée]" readonly>



            </div>
            <div class="col-6">
            <div class="mt-4">
                <select class="custom-select " multiple>
                    <optgroup label="Entreprise">
                        <option>Rechercher</option>
                        <option>Créer</option>
                        <option>Modifier</option>
                        <option>Supprimer</option>
                        <option>Évaluer</option>
                        <option>Consulter les statistiques</option>
                    </optgroup>
                    <optgroup label="Offre">
                        <option>Rechercher</option>
                        <option>Créer</option>
                        <option>Modifier</option>
                        <option>Supprimer</option>
                        <option>Consulter les statistiques</option>
                    </optgroup>
                    <optgroup label="Pilote">
                        <option>Rechercher</option>
                        <option>Créer</option>
                        <option>Modifier</option>
                        <option>Supprimer</option>
                    </optgroup>
                    <optgroup label="Délégué">
                        <option>Rechercher</option>
                        <option>Créer</option>
                        <option>Modifier</option>
                        <option>Supprimer</option>
                    </optgroup>
                    <optgroup label="Étudiant">
                        <option>Rechercher</option>
                        <option>Créer</option>
                        <option>Modifier</option>
                        <option>Supprimer</option>
                    </optgroup>
                    <optgroup label="Avancement">
                        <option>Informer le système de l'avancement de la candidature step 3</option>
                        <option>Informer le système de l'avancement de la candidature step 4</option>
                    </optgroup>
                </select>
                </div>
                <button type="button" class="btn btn-success w-25 mt-5">Créer ce délégué</button>
            </div>
        </div>
    </div>
</div>

@endsection