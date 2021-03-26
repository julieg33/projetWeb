@extends('template.templateAdmin', ['title' => "Attribution des droits au délégué"])

@section('content')

    <div class="card w-75 text-center  mx-auto mt-3">
        <div class="card-body row">
            <div class="col-6">
                <label>Nom :</label>
                <input type="text" class="form-control w-50 mx-auto" placeholder="[Nom]" readonly>
                <label>Prénom :</label>
                <input type="text" class="form-control w-50 mx-auto" placeholder="[Prénom]" readonly>
                <label>Centre :</label>
                <input type="text" class="form-control w-50 mx-auto" placeholder="[Centre]" readonly>
                <label>Promotion assignée :</label><br>
                <input type="text" class="form-control w-50 mx-auto" placeholder="[Promotion assignée]" readonly>
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

@endsection