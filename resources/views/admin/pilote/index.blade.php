@extends('template.templateAdmin', ['title' => 'Pilotes'])

@section('content')

    <div class="card w-75 text-center  mx-auto mt-3">
        <div class="row">
            <div class="col">
                <label>Nom :</label>
                <input type="text" class="form-control w-50 mx-auto">
                <label>Prénom :</label>
                <input type="text" class="form-control w-50 mx-auto">
                <label>Centre :</label>
                <input type="text" class="form-control w-50 mx-auto">
                <label>Promotions assignées :</label><br>
                <select class="custom-select w-50  h-25" multiple>
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
                <a type="button" class="btn btn-success w-50 mt-5" href ="{{ url('/creerPilote') }}">Créer un nouveau pilote</a>
            </div>
        </div>
        <div class="card mt-5 w-75 mx-auto">
            <div class="row">
                <div class="col">
                    <h5 class="card-title">[Nom][Prénom]</h5>
                    <p class="card-text">Centre de [Nom du centre]</p>                    
                    <p class="card-text">Promotions assignées : [promotions assignées]</p>
                </div>
                <div class="col text-right mt-4 mr-5">
                    <a type="button" class="btn btn-warning w-25" href ="{{ url('/modifierPilote') }}">Modifier</a>
                    <button type="button" class="btn btn-danger w-25" >Supprimer</button>
                </div>
            </div>
        </div>
    </div>

@endsection

