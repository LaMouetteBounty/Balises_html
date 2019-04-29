<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>&lt; html &gt;</title>
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
    <header class="header--saumon">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <img id="logoacceuil" src="img/logo.png" alt="image du logo" height="100px">
                        <h1>&lt; html &gt;</h1>
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
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 presbalise presbalise--body">
                    <p>La balise html est indispensable, elle indique au navigateur qu'il s'agit bien d'un document HTML,<br>
                        elle représente la racine du fichier. Elle engloble toutes les autres balises, à part le !doctype.
                        Pour la petite histoire, html signifie HyperText Markup Language, la dernière version est la 5.<br>
                        C'est Tim Bernes-Lee qui à créé cet outil en 1991.
                        Côté pratique, la balise ce place toujours juste après le Doctype et ce referme tout à la fin du document.
                        En voici un exemple :</p>
                    <a href="img/exhtml.png">
                        <img class="img-fluid" src="img/exhtml.png" alt="photo lignes de code dans la balise html" height="450px" title="Cliquez pour agrandir"></a>
                </div>
            </div>
        </div>
    </main>
    <footer class="footer--saumon">
        <p id="credit">Copyright : Isabelle, Léa et Chérif <br>
            Crédit font : Kind regards, Klim Type Foundry</p>
    </footer>
</body>

</html>