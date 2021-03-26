@extends('template.templateAdmin', ['title' => "Création d'un pilote"])

@section('content')

    <div class="card w-75 text-center  mx-auto mt-3" >
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <label>Nom :</label>
                    <input type="text" class="form-control w-50 mx-auto">
                    <label>Prénom :</label>
                    <input type="text" class="form-control w-50 mx-auto">
                    <label>Centre :</label>
                    <input type="text" class="form-control w-50 mx-auto">
                    <label>Promotions assignées :</label><br>
                    <select class="custom-select w-50  " multiple>
                        <option selected>Choose...</option>
                        <option value="1">1ère année</option>
                        <option value="2">2ème année</option>
                        <option value="3">3ème année</option>
                        <option value="3">4ème année</option>
                        <option value="3">5ème année</option>
                    </select><br>
                </div>
                <div class="col">
                    <label>Mail :</label>
                    <input type="email" class="form-control w-50 mx-auto">
                    <label>Mot de passe :</label>
                    <input type="password" class="form-control w-50 mx-auto">
                    <label>Confirmation du mot de passe : :</label>
                    <input type="password" class="form-control w-50 mx-auto">               
                    <button type="button" class="btn btn-success w-25 mt-3">Créer</button>
                </div>
            </div>
        </div>
    </div>

@endsection