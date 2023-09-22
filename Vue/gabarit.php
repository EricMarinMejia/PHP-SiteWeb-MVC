<!-- Affichage -->
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <base href="<?= $racineWeb ?>" >
        <link rel="stylesheet" href="./Contenu/mystyle.css" />
        <title id="titrePage"><?= $titre ?></title>   <!-- Élément spécifique -->
    </head>
    <body>
        <div class="topnav">

            <?php if (isset($utilisateur)) : ?>
                    <a href="Adminreparations">Réparations</a>
                    <a href="AdminVehicules">Véhicules</a>
                    <a href="Adminutilisateurs">Utilisateurs</a>
                    <a href="tests.php">->TEST<-</a>
                    <a href="Adminapropos">À propos</a>
                    <a href="Adminutilisateurs/deconnecter">Deconnexion</a>
            <?php else : ?>
                    <a href="Reparations">Réparations</a>
                    <a href="Vehicules">Véhicules</a>
                    <a href="Utilisateurs">Utilisateurs</a>
                    <a href="tests.php">->TEST<-</a>
                    <a href="Apropos">À propos</a>
                    <a href="Utilisateurs/login">Connexion</a>
            <?php endif; ?>

        </div>
                
        <div id="global">
            <header>
                <?php if (isset($utilisateur)) : ?>
                    <h3>Bonjour <?= $utilisateur['prenom'] ?></h3>
                <?php endif; ?>
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



