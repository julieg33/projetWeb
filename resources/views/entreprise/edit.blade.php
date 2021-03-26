@extends('template.templateAdmin', ['title' => "Modification d'une entreprise"])

@section('content')

    <div class="card w-75 text-center  mx-auto mt-3">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <label>Nom de l'entreprise :</label>
                    <input type="text" class="form-control w-50 mx-auto mb-4" value="[Nom de l'entreprise]">
                    <label>Localité :</label>
                    <input type="text" class="form-control w-50 mx-auto mb-4" value="[Localité]">
                    <label>Nombre de stagiaires CESI déjà recrutés :</label>
                    <input type="number" class="form-control w-50 mx-auto mb-4" value="1">
                    <label>Secteur d'activité :</label>
                    <input type="text" class="form-control w-50 mx-auto mb-4" value="[Secteur d'activité]">
                    <button type="button" class="btn btn-success w-25 mt-4">Modifier l'entreprise</button>
                </div>
            </div>
        </div>
    </div>


@endsection