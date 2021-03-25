<!DOCTYPE html>
<html >
    <head>
        <meta charset="utf-8">
        <title>authentification </title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		
    </head>
    <body class="" >
    <div class="card w-75 text-center  mx-auto mt-5 ">
        <div class="card-header ">
            <div class="row">
                <div class="col-0 text-left">
                    <img id="logo" src="{{url('image/cesi.png')}}" alt=""/>
                </div>
                <div class="col-12 ">
                    <h2>Bienvenue sur votre site de recherche de stage</h2>
                </div>
            </div>
        </div>
        <div class="card-body">
            <p class="card-title mb-5 mt-5">Ce site a pour but de vous aider dans vos recherches de stage. Il répertorie différentes annonces et les entreprises qui leur sont associées. Vous pourrez également suivre l'avancement de vos demandes, tenir une Wish-list ainsi que de nombreuses autres fonctionnalités. </p>
            <h5 class="card-text mb-5 mt-5">Pour accéder au site, merci de vous authentifier :</h5>
            <label for="exampleInputEmail1">Mail :</label>
            <input type="text" class="form-control w-25 mx-auto">
            <label for="exampleInputEmail1">Mot de passe :</label>
            <input type="text" class="form-control w-25 mx-auto">
            <button type="button" class="btn btn-success w-25 mb-5 mt-5">Se connecter</button>
            <p class="card-title text-right mt-5">Site dévéloppé par CAVARROC Maxime, DEVINEAU Rodrigue, GILS Julie et SEROUSSI Théo.</p>


        </div>
    </div>
		

		<style>			
			body {
            background-image: url("{{url('image/cesi.jpg')}}") ;
			}
            #logo {
				width: 350px;
				height: 100px;

			}

		</style>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
	</body>
</html>

