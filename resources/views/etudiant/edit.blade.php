@extends('template.templateAdmin', ['title' => "Modification d'un étudiant"])

@section('content')

    <div class="card w-75 text-center  mx-auto mt-3" >
        <div class="card-body row">
            <div class="col">
                <label>Nom :</label>
                <input type="text" class="form-control w-50 mx-auto" value="[Nom]">
                <label>Prénom :</label>
                <input type="text" class="form-control w-50 mx-auto" value="[Prénom]">
                <label>Centre :</label>
                <input type="text" class="form-control w-50 mx-auto" value="[Centre]">
                <label>Promotion :</label><br>
                <select class="custom-select w-50  " >
                    <option selected>[Promotion]</option>
                    <option value="1">1ère année</option>
                    <option value="2">2ème année</option>
                    <option value="3">3ème année</option>
                    <option value="3">4ème année</option>
                    <option value="3">5ème année</option>
                </select><br>
            </div>
            <div class="col">
                <label>Mail :</label>
                <input type="email" class="form-control w-50 mx-auto" value="[Mail]">
                <label>Mot de passe :</label>
                <input type="password" class="form-control w-50 mx-auto" value="[Mot de passe]">
                <label>Confirmation du mot de passe :</label>
                <input type="password" class="form-control w-50 mx-auto" value="[Mot de passe]">      
                <div class="mt-4">
                    <input type="checkbox">
                    <label>Délégué</label>
                </div>   
                
            <!--Si case "delegue" cochée, alors bouton Créer devient :
                <a type="button" class="btn btn-dark w-25 mt-3" href ="{{ url('/droitDelegue') }}">Créer</a>    
            -->             
                <button type="button" class="btn btn-dark w-25 mt-3">Modifier</button>
            </div>
        </div>
    </div>

@endsection