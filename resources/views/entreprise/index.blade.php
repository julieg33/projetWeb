@extends('template.templateAdmin', ['title' => "Nos entreprises"])

@section('content')

    <div class="row">
        <div class="col-3">
            <div class="card  w-75 text-center  mx-auto mt-3">
                <div class="card-header text-center">
                    <h5>Filtres :</h5>
                </div>
                <div class="card-body">
                    <p class="text-left mt-2">Nom :</p>
                    <input type="text" class="form-control">
                    <p class="text-left mt-2">Secteur d'activité :</p>
                    <input type="text" class="form-control">
                    <p class="text-left mt-2">Compétences recherchées :</p>
                    <input type="text" class="form-control">
                    <p class="text-left mt-2">Nombre de stagiaire CESI déja recrutés :</p>
                    <input type="number" class="form-control" min="0">
                    <p class="text-left mt-2">Évaluation des stagiaires (/10) :</p>
                    <input type="number" class="form-control" min="0" max="10">
                    <p class="text-left mt-2">Confiance du pilote (/10) :</p>
                    <input type="number" class="form-control" min="0" max="10">
                    <button type="button" class="btn btn-dark mt-4">Rechercher</button>
            
                </div>
            </div>
        </div>
        <div class="col-9">
            <div class="card  mt-3">
                <div class="card-header text-left">
                    <div class="row">
                        <div class="col">
                            <h5>Résultats :</h5>
                        </div>
                        @if(Auth::user()->right->SFx3)
                            <div class="col text-right">
                                <a type="button" class="btn btn-success" href ="{{ url('/uneEntreprise') }}">Créer une entreprise</a>                       
                            </div>
                        @endif
                    </div>
                </div>
                <div class="card-body">
                    <div class="card  mt-3 mb-3">        
                        <div class="card-body" >
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-left">[Nom de l'entreprise]</h5>
                                    <p class="card-text text-left">[Localité de l'entreprise]</p>
                                </div>
                                <div class="col text-right">								
                                    <a type="button" class="btn btn-dark" href ="{{ url('/uneEntreprise') }}">Voir </a>
                                    @if(Auth::user()->right->SFx4)								
                                        <a type="button" class="btn btn-warning" href ="{{ url('/uneEntreprise') }}">Modifier</a>
                                    @endif
                                    @if(Auth::user()->right->SFx6)		
                                        <a type="button" class="btn btn-danger" href ="{{ url('/uneEntreprise') }}">Supprimer</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>

@endsection