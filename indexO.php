<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title> ComparOperator </title>
</head>

<body>

    <!-- HEADER / NAVBAR -->

    <header id="header">
        <nav class="navbar navbar-expand-lg d-flex" style="width: 100%;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#header" style="color: white;"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" style="color: white;"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon bi bi-list">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-list" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                        </svg>
                    </span>
                </button>

                <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="indexD.php"> Destinations </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="indexO.php"> Opérateurs </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Administrateur.php"> Admin </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- FIN NAVBAR -->

    <div class="name-title wrapper"> <!-- + Carousel -->
        <div class="typing-demo fs-1">
            <font color="black"> <strong> Welcome to<br>ComparOperator </strong> </font>
        </div>
    </div>

    <!-- FIN HEADER -->

    <!-- OPERATEUR -->

    <section class="Opérateur" id="Opérateur">

        <div class="content-title">

            <h1 class="fs-1"> <strong> Nos Opérateurs </strong> </h1>

        </div>

        <div class="container">
            <div class="row opérateur">

                <div class="col-12 col-md-6 col-lg-4 opérateur">

                    <div class="card text-center" style="width: 50%; ">

                        <img src="https://www.salaunmag.com/uploads/salaun-mag-and-news.jpg" class="card-img-top"
                            alt="...">

                        <div class="card-body">


                            <h5 class="card-title"> Salaun Holidays </h5>

                            <p class="card-text"> Tour-opérateur et voyagiste français. </p>

                            <a target="_blank" href="https://www.salaun-holidays.com/" class="btn orange">
                                Voir les offres de cet opérateur</a>

                        </div>

                    </div>

                </div>

                <div class="col-12 col-md-6 col-lg-4 opérateur">

                    <div class="card text-center" style="width: 50%;">

                        <img src="https://play-lh.googleusercontent.com/0ZA4UQQIsUeqgU8KhGkrD_Te1PNk_GMYSnZU3tdtL-wesr2BWzchxkjgafyJ4NxAVg"
                            class="card-img-top" alt="...">

                        <div class="card-body">


                            <h5 class="card-title"> Fram </h5>

                            <p class="card-text"> FRAM est un voyagiste français fondé en 1949. </p>

                            <a target="_blank" href="https://www.fram.fr/" class="btn orange">
                                Voir les offres de cet opérateur</a>

                        </div>

                    </div>

                </div>

                <div class="col-12 col-md-6 col-lg-4 opérateur">

                    <div class="card text-center" style="width: 50%;">

                        <img src="https://carriere.mariettondeveloppement.fr/wp-content/uploads/2021/10/logo_heliades.png"
                            class="card-img-top" alt="...">

                        <div class="card-body">


                            <h5 class="card-title"> Heliades </h5>

                            <p class="card-text"> Heliade répond aux attentes des vacanciers.<br>
                                
                                 </p>

                            <a target="_blank" href="https://www.heliades.fr/" class="btn orange">
                                Voir les offres de cet opérateur</a>

                        </div>

                    </div>

                </div>

    </section>

    <!-- FIN OPERATEUR -->


</body>

<script src="/js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>

</html>