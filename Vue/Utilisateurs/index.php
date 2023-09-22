<?php $this->titre = 'Système de gestion de réparations automobiles'; ?>

<div class="divCentralCategories">

    <section></section>

    <div class="containerVueGenerale">
        <?php foreach ($utilisateurs as $utilisateur):
            ?>
            <article class="articleVueGenerale">
                <header>
                    <a href="Utilisateurs/utilisateur/<?= $utilisateur['id'] ?>">
                        <h1 class="titreUtilisateur">Utilisateur #<?= $this->nettoyer($utilisateur["id"])  ?>: <?= $this->nettoyer($utilisateur['nom']) ?>, <?= $this->nettoyer($utilisateur['prenom']) ?></h1>
                    </a>
                        <h3><?= $this->nettoyer($utilisateur['telephone']) ?></h3>
                </header>
            </article>
            <hr id="hrArticles"/>
    <?php endforeach; ?>
    </div>

    <section></section>

</div>
