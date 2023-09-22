<?php $this->titre = 'Système de gestion de réparations automobiles'; ?>

<div class="divCentralCategories">

    <section></section>

    <div class="containerVueGenerale">
        <?php foreach ($vehicules as $vehicule):
            ?>
            <article class="articleVueGenerale">
                <header>
                    <a href="Vehicules/vehicule/<?= $vehicule['id'] ?>">
                        <h1 class="titreVehicule">Vehicule #<?= $this->nettoyer($vehicule["id"])  ?>: <?= $this->nettoyer($vehicule['plaque']) ?></h1>
                    </a>
                        <h3><?= $this->nettoyer($vehicule['marque']) ?> <?= $this->nettoyer($vehicule['modele']) ?></h3>
                <header>
            </article>
            <hr id="hrArticles"/>
        <?php endforeach; ?>
    </div>
    
    <section></section>

</div>
