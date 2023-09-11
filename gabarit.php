<!-- Affichage -->
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="style.css" />
        <title id="titrePage"><?= $titre ?></title>   <!-- Élément spécifique -->
    </head>
    <body>
        <div class="topnav">
            <a href="index.php">Réparations</a>
            <a href="indexVehicules.php">Véhicules</a>
            <a href="indexUtilisateurs.php">Utilisateurs</a>  
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



