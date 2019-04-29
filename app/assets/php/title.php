<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>&lt; title &gt;</title>
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
    <meta name="twitter:title" content="blabla">
    <meta name="twitter:description" content="Venez découvrir nos balises html">
    <meta name="twitter:image:src" content="img/logo.png">

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
                        <h1>&lt; title &gt;</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main class="container-fluid main--saumon">
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

                    <p>La Balise title, comme son nom l'indique, va nous permettre de donner un titre à notre page,
                        il seras visible dans l'onglet du navigateur. Elle est également très importante face au
                        référencement. Le titre doit être en adéquation avec le contenu global, le thème, le sujet de la page qu’il
                        désigne.
                        Essayer de nommer le titre d’une page avec un titre générique pouvant être très recherché mais sans lien avec le
                        contenu de la page vous sera fatal
                        dans la mesure où les moteurs de recherche rassemblent un maximum de données sur une page avant de la classer
                        dans un thème.
                        Il seras important d'utiliser un titre différent pour chaque page de votre site. Sinon vous serez pénaliser en
                        référencement
                        Evitez de lister des mots clés en guise de titre de page, vous serez alors considéré comme des spammeurs.
                        Il faut que votre titre informe sur le contenu de votre page.
                        Evitez les chiffres, les caractères spéciaux, des mots en majuscules...
                        cela nuirait à la bonne lecture du titre mais également au référencement de votre site
<br>
                        Exemple :</p>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                            <a href="img/extitle/extitle1.png">
                                <img class="img-fluid" src="img/extitle/extitle1.png" alt="photo lignes de code dans la balise title" height="100px" title="Cliquez pour agrandir"></img></a> </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                            <a href="img/extitle/extitle2.png">
                                <img class="img-fluid" src="img/extitle/extitle2.png" alt="photo dans la balise title sur le navigateur" height="100px" title="Cliquez pour agrandir"></img></a>
                        </div>
                    </div>
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