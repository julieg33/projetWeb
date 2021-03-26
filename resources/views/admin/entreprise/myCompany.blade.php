@extends('template.templateAdmin', ['title' => 'Mes entreprises'])

@section('content')

    <div class="card w-75 text-center  mx-auto mt-3" id="content">
        <div class="row mt-5">
            <div class="col ml-6 ">
                <input type="text" class="form-control w-50 float-right" placeholder="Nom de l'entreprise">
            </div>
            <div class="col">
                <button type="submit" class="btn btn-dark w-50 float-left">Rechercher</button>
            </div>
            <div class="col">
                <a type="submit" class="btn btn-success w-50" href ="{{ url('/creerEntreprise') }}">Créer une nouvelle entreprise</a>
            </div>
        </div>
        <div class="card mt-5 w-75 mx-auto">
            <div class="card-header ">
                [nom de l'entreprise]
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm">
                        <a type="submit" class="btn btn-dark w-50" href ="{{ url('/uneEntreprise') }}">Voir</a>
                    </div>
                    <div class="col-sm">
                        <a type="submit" class="btn btn-warning w-50" href ="{{ url('/modifierEntreprise') }}">Modifier</a>
                    </div>
                    <div class="col-sm">
                        <button type="submit" class="btn btn-danger w-50">Supprimer</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection