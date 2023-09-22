<?php $this->titre = 'Système de gestion de réparations automobiles'; ?>

<div class="divCentralCategories">

    <section></section>

    <div class="containerVueGenerale">
        <?php foreach ($reparations as $reparation):
            ?>
            <?php if ($reparation['efface'] == '0') : ?>
                <article class="articleVueGenerale">
                    <header>
                        <a href="Reparations/reparation/<?= $reparation['id'] ?>">
                            <h1 class="titreReparation">Réparation #<?= $this->nettoyer($reparation["id"]) ?></h1>
                        </a>
                            <h3><?= $this->nettoyer($reparation['description_reparations']) ?></h3>
                            <time><?= $this->nettoyer($reparation['date_reparation_debut']) ?></time> - <time><?= $this->nettoyer($reparation['date_reparation_fin']) ?></time>
                    <header>
                </article>
            <?php else : ?>
                <article class="articleVueGenerale">
                    <header>
                        <h1 id="efface" class="titreReparation">Réparation #<?= $this->nettoyer($reparation["id"]) ?></h1>
                        <h3 id="efface"><?= $this->nettoyer($reparation['description_reparations']) ?></h3>
                        <time><?= $this->nettoyer($reparation['date_reparation_debut']) ?></time> - <time><?= $this->nettoyer($reparation['date_reparation_fin']) ?></time>
                    <header>
                </article>
            <?php endif; ?>

            <hr id="hrArticles"/>
        <?php endforeach; ?>
    </div>

    <section></section>

</div>


