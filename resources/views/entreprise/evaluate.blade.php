@extends('template.templateAdmin', ['title' => "Évaluation d'une entreprise"])

@section('content')

    <div class="card w-75 text-center  mx-auto mt-3">
        <div class="card-body ">
            <div class="row ">
                <div class="col mx-5 ">
                    <h5>Note ( /10) :</h5>
                    <input type="number" class="form-control text-center" min="0" max="10">
                    <h5 class="mt-4">Commentaire :</h5>
                    <textarea class="form-control" rows="3"></textarea>
                    <button type="button" class="btn btn-success mt-4">Créer l'entreprise</button>
                </div>
            </div>
        </div>
    </div>

@endsection

