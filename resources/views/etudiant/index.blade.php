@extends('template.templateAdmin', ['title' => 'Liste Étudiants'])

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
                <label>Promotion :</label><br>
                <select class="custom-select w-50">
                    <option selected>Choose...</option>
                    <option value="1">1ère année</option>
                    <option value="2">2ème année</option>
                    <option value="3">3ème année</option>
                    <option value="3">4ème année</option>
                    <option value="3">5ème année</option>
                </select><br>
                <button type="button" class="btn btn-dark w-25 mt-3">Rechercher</button>
            </div>
            @if(Auth::user()->right->SFx23)
                <div class="col">
                    <a type="button" class="btn btn-success w-50 mt-5" href ="{{ url('/creerEtudiant') }}">Créer un nouvel étudiant</a>
                </div>
            @endif
        </div>
        <div class="card mt-5 w-75 mx-auto">
            <div class="row">
                <div class="col">
                    <h5 class="card-title">[Nom][Prénom]</h5>
                    <p class="card-text">Centre de [Nom du centre]</p>                    
                    <p class="card-text">Promotion : [promotion]</p>
                </div>
                <div class="col text-right mt-4">
                    @if(Auth::user()->right->SFx26)
                        <a type="button" class="btn btn-dark w-25" href ="{{ url('/unEtudiant') }}">Voir</a>
                    @endif
                    @if(Auth::user()->right->SFx24)
                        <a type="button" class="btn btn-warning w-25" href ="{{ url('/modifierEtudiant') }}">Modifier</a>
                    @endif
                    @if(Auth::user()->right->SFx25)
                        <button type="button" class="btn btn-danger w-25">Supprimer</button>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection
