<!-- Affichage -->
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="./Contenu/mystyle.css" />
        <title id="titrePage"><?= $titre ?></title>   <!-- Élément spécifique -->
    </head>
    <body>
        <div class="topnav">
            <a href="./index.php?">Réparations</a>
            <a href="./index.php?action=vehicules">Véhicules</a>
            <a href="./index.php?action=utilisateurs">Utilisateurs</a>
            <a href="tests.php">->TEST<-</a>
            <a href="index.php?action=apropos">À propos</a>
        </div>
                
        <div id="global">
            <header>
                <h1 id="titreBlog">Gestionnaire de réparations automobiles</h1>
                <p>Système de gestion pour les réparations automobiles et clients</p>
            </header>
            <div id="contenu">
                <?= $contenu ?>   <!-- Élément spécifique -->
            </div> <!-- #contenu -->
            <br />
            <footer id="piedBlog">
                Site réalisé avec PHP, HTML et CSS.
            </footer>
        </div> <!-- #global -->
    </body>
</html>



