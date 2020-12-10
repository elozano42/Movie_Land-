<!DOCTYPE html>
<html lange="fr">

<head>
    <meta charset="UTF-8">
    <title>Site de pc</title>
    <link href="./src/public/css/styles.css" rel="stylesheet">
    <script src="./src/public/js/script.js"></script>
    <!--material-->
    <link href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css" rel="stylesheet">
    <script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>
    <!-- bootsrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <header>
        <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar">
            <a class="navbar-brand" href="?page=home">Movie Land</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="title" href="?page=home">Accueil</a> 
                    </li>
                    <li class="nav-item">
                        <a class="title" href="?page=newAd">&nbsp;&nbsp;&nbsp;&nbsp;Ajouter des films </a>
                    </li>
                    <li class="nav-item">
                        <a class="title" href="?page=ads">&nbsp;&nbsp;&nbsp;&nbsp;Voir les films </a>
                    </li>
                    <li class="nav-item">
                        <a class="title" href="?page=search">&nbsp;&nbsp;&nbsp;&nbsp;Rechercher un film </a>
                    </li>
                </ul>
            </div>
        </nav>
        </div>
    </header>

    <div class="container-fluid">
    <h1><?php echo $this->title; ?></h1>
    <p><?php echo $this->title2; ?></p>
    </div>

<!-- Alert SweetAlert --> 
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<!-- script Bootsrap -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

    <!-- script Bootsrap -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</html>
