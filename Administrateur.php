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

    <div class="name-title wrapper">
        <div class="typing-demo fs-1">
            <font color="black"> <strong> Welcome to<br>ComparOperator </strong> </font>
        </div>
    </div>

    <!-- FIN HEADER -->

    <!-- ADMIN -->

    <section class="Admin" id="Admin">

        <form action="createAdmin.php" method="post">
            <h4> Inscription </h4>
            <hr>

            <div class="name-field">
                <div>
                    <label> Nom </label>
                    <input name="nom" type="text">
                </div>

                <div>
                    <label> Prénom </label>
                    <input name="prenom" type="text">
                </div>
            </div>

            <label> Mot de passe </label>
            <input type="password" name="motdepasse">

            <input type="submit" value="S'inscrire">
           

        </form>

    </section>


    <!-- FIN ADMIN -->



</body>

<script src="/js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>

</html>