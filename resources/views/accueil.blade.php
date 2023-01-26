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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/2.3.1/css/flag-icon.min.css" rel="stylesheet" />
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


    <div class="py-5 bg-light">
        <div class="container">

            <h1 class="pb-5 text-center fw-light"><strong>Formations</strong></h1>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                    <div class="card shadow-sm">
                        <!-- https://mdbootstrap.com/docs/standard/components/cards/ -->
                        <img src="https://mdbootstrap.com/img/new/standard/nature/184.jpg" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Java</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <a class="btn btn-sm btn-outline-primary" href="java.html" role="button">Voir</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm  text-end">
                        <img src="https://mdbootstrap.com/img/new/standard/city/042.jpg" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">PHP</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <a class="btn btn-sm btn-outline-primary" href="php.html" role="button">Voir</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm text-center">
                        <img src="https://mdbootstrap.com/img/new/standard/nature/111.jpg" class="img-fluid" />

                        <div class="card-body">
                            <h5 class="card-title">C/C++</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <a class="btn btn-sm btn-outline-primary" href="cpp.html" role="button">Voir</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <section class="py-5 text-center container">
        <div class="row">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="text-center fw-light"><strong>Nous Contacter</strong></h1>
                <p class="lead text-muted">Pour tous vos besoins et toutes vos idées, n'hésitez pas à nous contacter.</p>
                <a href="contact.html" class="btn btn-outline-primary my-2">Nous Contacter</a>
            </div>
        </div>
    </section>




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