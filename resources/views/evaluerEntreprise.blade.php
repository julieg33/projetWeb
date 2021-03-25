@extends('template.templateAdmin', ['title' => "Évaluation d'une entreprise"])


@section('content')
    <div class="card w-75 mx-auto mt-3">
        <div class="card-header text-center">
            <h5>Évalution de [Nom de l'entreprise]</h5>
        </div>
        <div class="card-body mx-auto w-50">
            <h5>Note (/10) :</h5>
            <input type="number" class="form-control" min="0" max="10">
            <h5 class="mt-4">Commentaire :</h5>
            <textarea class="form-control" id="description" rows="3"></textarea>
        </div>
    </div>
@endsection

