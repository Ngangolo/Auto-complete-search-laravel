<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
	
    <title>Mon blog</title>
	<link rel="icon" href="https://www.jsdelivr.com/img/icon_256x256.png">

    

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css">
	
	<!-- other CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/2.3.1/css/flag-icon.min.css" rel="stylesheet"/>
	<link href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css" rel="stylesheet">
    
    <!-- Bootstrap javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  
  <body>
    <nav class="navbar navbar-expand-md navbar-light p-3 px-md-4 mb-3 bg-body border-bottom shadow-sm">
	  <div class="container-fluid">
		<a class="navbar-brand" href="welcome.html">
		    <img src="https://www.jsdelivr.com/img/icon_256x256.png" width="30" height="30" class="d-inline-block align-top" alt=""> Mon blog
		</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		  <span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
		  <ul class="navbar-nav ms-auto mb-2 mb-lg-0 d-flex">
          <li class="nav-item px-2">
			  <a class="nav-link active" aria-current="page" href="{{route('addcopros')}}">ajouter copropriété</a>
			</li>
            <li class="nav-item px-2">
			  <a class="nav-link active" aria-current="page" href="{{route('listcopros')}}">liste copropriété</a>
			</li>
			<li class="nav-item px-2">
			  <a class="nav-link active" aria-current="page" href="welcome.html">Accueil</a>
			</li>
			<li class="nav-item dropdown px-2">
			  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
				Articles
			  </a>
			  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
				<li><a class="dropdown-item" href="java.html">Java</a></li>
				<li><a class="dropdown-item" href="php.html">PHP</a></li>
				<li><a class="dropdown-item" href="cpp.html">C/C++</a></li>
			  </ul>
			</li>
			<li class="nav-item px-2">
			  <a class="nav-link" href="contact.html">Contact</a>
			</li>
			<li class="nav-item dropdown px-2">
			  <a class="nav-link dropdown-toggle active" href="#" id="navbarLang" role="button" data-bs-toggle="dropdown" aria-expanded="false">
				<span class="flag-icon flag-icon-fr"></span> FR
			  </a>
			  <ul class="dropdown-menu" aria-labelledby="navbarLang">
				<li><a class="dropdown-item" href="#"><span class="flag-icon flag-icon-fr"></span> FR <i class="fa fa-check px-2" aria-hidden="true"></i></a></li>
				<li><a class="dropdown-item" href="#"><span class="flag-icon flag-icon-us"></span> EN</a></li>
			  </ul>
			</li>
			<li class="nav-item px-2">
			    <a class="btn btn-outline-primary me-2" href="login.html">Connexion</a>
			</li>
			<li class="nav-item px-2">
			    <a class="btn btn-outline-primary" href="register.html">S'inscrire</a>
			</li>
		  </ul>
		</div>
	  </div>
    </nav>

    <div class="container-fluid">
    <div class="row justify-content-center">

        <div class="col-md-8">
            <div class="card mt-5">
                <B class="card-header">LISTE DES COPROPRIETES </B>
                <div class="card-body">
                    <table class="table border">
                        <thead class=" border">
                            <tr>
                
                                <th scope="col" class="border col-2">nom</th>
                                <th scope="col" class="border col-2">nbBloc </th>
                                <th scope="col" class="border col-2">nbEtage</th>
                                <th scope="col" class="border col-4">nbAppart</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($copros as $copro)
                            <tr class=" border">
                                <td class="border">{{$copro->nom}}</td>
                                <td class="border">{{$copro->nbBloc}}</td>
                                <td class="border">{{$copro->nbEtage}}</td>
                                <td class="border">{{$copro->nbAppart}}</td>
                            
                                <td>
                                    <a href="{{route('detailcopro',$copro->id)}}">
                                        <button class="btn btn-warning">Details</button>
                                    </a>
                                </td>
                              
                            </tr>
                            @empty
                            <td>Pas de copro disponible !!!</td>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
          
        </div>
    </div>
</div>




	<footer class="container pt-4 my-md-5 pt-md-5 border-top">
		<div class="row">
		  <div class="col-12 col-md">
			<img class="mb-2" src="https://www.jsdelivr.com/img/icon_256x256.png" alt="" width="24" height="24">
			<small class="d-block mb-3 text-muted">&copy; 2017–2021</small>
		  </div>
		  <div class="col-6 col-md">
			<h5>Features</h5>
			<ul class="list-unstyled text-small">
			  <li><a class="link-secondary" href="#">Team feature</a></li>
			  <li><a class="link-secondary" href="#">Stuff for developers</a></li>
			  <li><a class="link-secondary" href="#">Another one</a></li>
			  <li><a class="link-secondary" href="#">Last time</a></li>
			</ul>
		  </div>
		  <div class="col-6 col-md">
			<h5>Resources</h5>
			<ul class="list-unstyled text-small">
			  <li><a class="link-secondary" href="#">Resource name</a></li>
			  <li><a class="link-secondary" href="#">Another resource</a></li>
			</ul>
		  </div>
		  <div class="col-6 col-md">
			<h5>About</h5>
			<ul class="list-unstyled text-small">
			  <li><a class="link-secondary" href="#">Privacy</a></li>
			  <li><a class="link-secondary" href="#">Terms</a></li>
			</ul>
		  </div>
		</div>
	</footer>
    
  </body>
</html>

