@extends('template.templateAdmin', ['title' => "Modification d'un délégué"])

@section('css')
<link rel="stylesheet" type = "text/css" href ="{{url('css/creerOffre.css')}}">
@endsection

@section('content')

<div class="card w-75 text-center  mx-auto mt-3" id="content">

    <div class="card-body">
        <div class="row">
            <div class="col">
                <label for="exampleInputEmail1">Nom :</label>
                <input type="text" class="form-control w-50 mx-auto" value="[Nom]">
                <label for="exampleInputEmail1">Prénom :</label>
                <input type="text" class="form-control w-50 mx-auto" value="[Prénom]">
                <label for="exampleInputEmail1">Centre :</label>
                <input type="email" class="form-control w-50 mx-auto" value="[Centre]">
                <label for="exampleInputEmail1">Promotion :</label><br>
                <select class="custom-select w-50  " >
                    <option selected>[Promotion]</option>
                    <option value="1">1ère année</option>
                    <option value="2">2ème année</option>
                    <option value="3">3ème année</option>
                    <option value="3">4ème année</option>
                    <option value="3">5ème année</option>
                </select><br>



            </div>
            <div class="col">
                <label for="exampleInputEmail1">Mail :</label>
                <input type="text" class="form-control w-50 mx-auto" value="[Mail]">
                <label for="exampleInputEmail1">Mot de passe :</label>
                <input type="password" class="form-control w-50 mx-auto" value="[Mot de passe]">
                <label for="exampleInputEmail1">Confirmation du mot de passe : :</label>
                <input type="password" class="form-control w-50 mx-auto" value="[Mot de passe]">      
                <div class="mt-4">
                <select class="custom-select " multiple>
        <!--Pour préremplir, mettre selected après option si l'option était cochée lors de la création-->
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
                <button type="button" class="btn btn-dark w-25 mt-3">Modifier</button>
            </div>
        </div>
    </div>
</div>

@endsection