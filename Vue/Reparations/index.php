<?php $this->titre = 'Système de gestion de réparations automobiles'; ?>

<div class="divCentralCategories">

    <section></section>

    <div class="containerVueGenerale">
        <?php foreach ($reparations as $reparation):
            ?>
            <article class="articleVueGenerale">
                <header>
                    <a href="Reparations/reparation/<?= $reparation['id'] ?>">
                        <h1 class="titreReparation">Réparation #<?= $this->nettoyer($reparation["id"]) ?></h1>
                    </a>
                        <h3><?= $this->nettoyer($reparation['description_reparations']) ?></h3>
                        <time><?= $this->nettoyer($reparation['date_reparation_debut']) ?></time> - <time><?= $this->nettoyer($reparation['date_reparation_fin']) ?></time>
                <header>
            </article>

            <hr id="hrArticles"/>
        <?php endforeach; ?>
    </div>

    <section></section>

</div>


