<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8" />
    <title>HTMLpourlesnuls</title>
    <link rel="icon" href="img/favicon.png">

    <meta name="language" content="fr-FR" />
    <meta name="description" content="Les balises html pour les nuls">
    <meta name="author" content="Isa, Cherrif et Lea">
    <meta name="keywords" content="Html, balise, Developpeur">
    <meta name="copyright" content="author">

    <!-- Meta pour facebook -->
    <meta property="og:url" content="htmlpourlesnulsfacebook.com">
    <meta property="og:website" content="htmlpourlesnuls.org">
    <meta property="og:title" content="htmlpourlesnuls">
    <meta property="og:description" content="Venez découvrir nos balises html">
    <meta property="og:image" content="img/logo.png">

    <!-- Meta pour twitter -->
    <meta name="twitter:card" content="htmlpourlesnuls.org">
    <meta name="twitter:site" content="hhtmlpourlesnuls.orgtmlpourlesnuls.org">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="Venez découvrir nos balises html">
    <meta name="twitter:image:src" content="img/logo.png">

    <!-- Meta pour Google+ -->
    <meta itemprop="name" content="htmlpourlesnuls.org">
    <meta itemprop="description" content="Venez découvrir nos balises html">
    <meta itemprop="image" content="img/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" />
</head>

<body>

    <header class="header">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <img id="logoacceuil" src="img/logo.png" alt="image du logo" height="100px">
                        <h1>Les balises c'est quoi ?</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main class="container-fluid">
        <div class="row">
            <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1 menu">
                <?php
                include("menu.html");
                ?>
            </div>
        </div>
        <div class="container">
            <div class="row">

                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 presbalise">
                    <p> Les balises HTML sont les éléments de base du codage HTML d'une page web. <br>
                        Invisibles pour l'internaute (sauf en activant l'affichage du code source),<br>
                        elles sont interprétées par le navigateur pour la composition de la page.</p>
                </div>
                <div class="col-12 logonul">
                    <img class="img-fluid" src="img/html-5-logo.png" alt="logo Html5" width="312" height="312">
                    <img class="img-fluid" src="img/css-3.png" alt="logo CSS3" width="312" height="312">
                </div>
            </div>
        </div>
    </main>

    <footer class="footer">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <p id="credit">Copyright : Isabelle, Léa et Chérif <br>
                            Crédit font : Kind regards, Klim Type Foundry</p>
                    </div>
                </div>
            </div>
    </footer>
</body>


</html>