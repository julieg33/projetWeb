@extends('template.templateAdmin', ['title' => 'Postuler à une offre'])

@section('content')

    <div class="card w-75 text-center  mx-auto mt-3" id="content">
        <h5 class="card-header">
            [Titre de l'offre] par [nom de l'entreprise]
        </h5>
        <div class="card-body">
            <div class="row">
                <div class="col-1"><h5 class="card-text text-right">A :</h5></div>
                <div class="col-11"><p class="card-text text-left">[Mail de l'entreprise]</p></div>
            </div>  
            <div class="row mt-3">
                <div class="col-1"><h5 class="card-text text-right ">De :</h5></div>
                <div class="col-11"><p class="card-text text-left">[Mail de l'étudiant]</p></div>
            </div> 
            <div class="row mt-3">
                <div class="col-1"><h6 class="card-text" >Message :</h6></div>
                <div class="col-11"> <textarea class="form-control" rows="3"></textarea></div>
            </div>
            <div class="row mt-3" >
                <div class="col-2 text-left">
                    <h6 class="card-text text-left">Pièces jointes :</h6>
                </div>
                <div class="col-1">
                    <p class="text-right">CV</p>                
                </div>
                <div class="col-6">
                    <input class="form-control" type="file" >  
                </div>
            </div>
            <div class="row mt-3" >
                <div class="col-3">
                    <p class="text-right">Lettre de motivation</p>                
                </div>
                <div class="col-6">
                    <input class="form-control" type="file" >  
                </div>
            </div>
            <button type="button" class="btn btn-success center-block mt-3 w-25">Valider</button>
        </div>
    </div>

@endsection