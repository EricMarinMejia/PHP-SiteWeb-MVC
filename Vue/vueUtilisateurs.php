<?php $titre = 'Système de gestion de réparations automobiles'; ?>

<?php ob_start(); ?>
<div class="divCentralCategories">

    <section></section>

    <div class="containerVueGenerale">
        <?php foreach ($utilisateurs as $utilisateur):
            ?>
            <article class="articleVueGenerale">
                <header>
                    <a href="<?= "index.php?action=utilisateur&id=" . $utilisateur['id'] ?>">
                        <h1 class="titreUtilisateur">Utilisateur #<?= $utilisateur["id"]  ?>: <?= $utilisateur['nom'] ?>, <?= $utilisateur['prenom'] ?></h1>
                    </a>
                        <h3><?= $utilisateur['telephone'] ?></h3>
                </header>
            </article>
            <hr id="hrArticles"/>
    <?php endforeach; ?>
    </div>

    <section></section>

</div>
<?php $contenu = ob_get_clean(); ?>

<?php require 'gabarit.php'; ?>
