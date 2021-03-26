@extends('template.templateAdmin', ['title' => 'Entreprise'])

@section('content')

    <div class="card  w-75 mx-auto mt-3">
        <h5 class="card-header">[Nom de l'entreprise]</h5>
        <div class="card-body">
            <div class="row">
                <div class="col-6"><h5 class="card-text text-right">Mail :</h5></div>
                <div class="col-6"><p class="card-text text-left">[Mail de l'entreprise]</p></div>
            </div>
            <div class="row mt-3">
                <div class="col-6"><h5 class="card-text text-right">Secteur d'activité :</h5></div>
                <div class="col-6"><p class="card-text text-left">[Secteur d'activité]</p></div>
            </div>
            <div class="row mt-3">
                <div class="col-6"><h5 class="card-text text-right">Localité</h5></div>
                <div class="col-6"><p class="card-text text-left">[Localité]</p></div>
            </div>
            <div class="row mt-3">
                <div class="col-6"><h5 class="card-text text-right">Confiance du pilote :</h5></div>
                <div class="col-6"><p class="card-text text-left">[Confiance du pilote]</p></div>
            </div>
            <div class="row mt-3">
                <div class="col-6"><h5 class="card-text text-right">Nombre de stagiaire CESI déjà recrutés :</h5></div>
                <div class="col-6"><p class="card-text text-left">[Nombre de stagiaire CESI déjà recrutés]</p></div>
            </div>
            <div class="row mt-4 justify-content-center">
                <a type="button" class="btn btn-success center-block" href ="{{ url('/evaluerEntreprise') }}">Évaluer l'entreprise</a>
            </div>
            <div class="row mt-4">
                <div class="col-6">
                <h5 class="card-title text-center">Offres disponibles :</h5>
                    <div class="card mt-2 w-75 mx-auto">
                        <div class="row">
                            <div class="col mt-4 ml-2 mb-4">
                                <h5 class="card-title">[Titre de l'offre]</h5>
                            </div>
                            <div class="col text-right mt-4 mr-2 mb-4">
                                <a type="button" class="btn btn-dark w-50" href ="{{ url('/uneOffre') }}">Voir l'offre</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                <h5 class="card-title text-center">Évaluations disponibles :</h5>
                    <div class="card mt-2 w-75 mx-auto">
                    <div class="row">
                            <div class="col mt-4 ml-2 mb-4">
                                <p class="card-title">[Commentaire]</p>
                            </div>
                            <div class="col text-right mt-4 mr-2 mb-4">
                                <p class="card-title">[Note/10]</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

