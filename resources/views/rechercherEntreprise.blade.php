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
            </div>
        </div>
    </div>
    <div class="col-9">
        <div class="card  mt-3">
            <div class="card-header text-left">
                <h5>Résultats :</h5>
            </div>
            <div class="card-body">
                <div class="card  mt-3 mb-3">        
                    <div class="card-body" >
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-left">[Nom de l'entreprise]</h5>
                                    <p class="card-text text-left">[Localité de l'entreprise]</p>
                                </div>
                                <div class="col text-right">
                                    <button type="button" class="btn btn-success">Voir l'entreprise</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>
	



@endsection