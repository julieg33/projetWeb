@extends('template.templateAdmin', ['title' => 'Délégué'])

@section('content')

    <div class="card w-75 text-center  mx-auto mt-3">
        <div class="card-header">
            <h4 class='text-center'> [Nom] [Prenom]</h4>
        </div>
        <div class="card-body ml-5">
            <p class="card-text">Mail : [inserer Mail]</p>
            <p class="card-text">Centre : [inserer Centre]</p>
            <p class="card-text">Délégué de promotion : [inserer Promotion]</p>
        </div>
        <div class="card w-75 text-center  mx-auto mt-3">
            <h5 class="card-header etudiant">[Nom de l'offre] par [Nom de l'entreprise]</h5>
            <div class="input-group mt-3 mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text">Avancement</label>
                </div>
                <select class="custom-select " >
                    <option selected>Choose...</option>
                    @if(Auth::user()->right->SFx30)
                        <option value="1">En attente d'une réponse</option>  
                    @endif                
                    @if(Auth::user()->right->SFx31)
                        <option value="2">Réponse positive</option>       
                        <option value="3">Réponse négative</option>                
                    @endif
                    @if(Auth::user()->right->SFx32)
                        <option value="3">Fiche de validation émise par l'entreprise</option>            
                    @endif 
                    @if(Auth::user()->right->SFx33)
                        <option value="3">Fiche de validation signée par le pilote</option>             
                    @endif 
                    @if(Auth::user()->right->SFx34)
                        <option value="3">Conventions émises à l'entreprise</option>                 
                    @endif 
                    @if(Auth::user()->right->SFx35)
                        <option value="3">Conventions signées</option>
                    @endif  
                </select>
                <button type="button" class="btn btn-success center-block">Valider</button>
            </div>
        </div>        
    </div>

@endsection


