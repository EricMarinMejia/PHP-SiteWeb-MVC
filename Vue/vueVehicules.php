<?php $titre = 'Système de gestion de réparations automobiles'; ?>

<?php ob_start(); ?>
<div class="divCentralCategories">

    <section></section>

    <div class="containerVueGenerale">
        <?php foreach ($vehicules as $vehicule):
            ?>
            <article class="articleVueGenerale">
                <header>
                    <a href="<?= "index.php?action=vehicule&id=" . $vehicule['id'] ?>">
                        <h1 class="titreVehicule">Vehicule #<?= $vehicule["id"]  ?>: <?= $vehicule['plaque'] ?></h1>
                    </a>
                        <h3><?= $vehicule['marque'] ?> <?= $vehicule['modele'] ?></h3>
                <header>
            </article>
            <hr id="hrArticles"/>
        <?php endforeach; ?>
    </div>
    
    <section></section>

</div>
<?php $contenu = ob_get_clean(); ?>

<?php require 'gabarit.php'; ?>
