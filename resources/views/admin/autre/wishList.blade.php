@extends('template.templateAdmin', ['title' => 'Wish-List'])

@section('css')
<link rel="stylesheet" type = "text/css" href ="{{url('css/wishList.css')}}">
@endsection

@section('content')

    <div class="card w-75 mx-auto mt-3 mb-3">        
        <div class="card-body" >
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title">[Titre de l'offre]</h5>
                        <p class="card-text">par [Nom de l'entreprise]</p>
                    </div>
                    <div class="col text-right">
                        <a type="button" class="btn btn-success"  href ="{{ url('/uneOffre') }}">Voir l'offre</a>
                        <button type="button" class="btn btn-danger">Retirer l'offre de ma Wish-List</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection