<?php $this->titre = 'Système de gestion de réparations automobiles'; ?>

<div class="divCentralCategories">

    <section></section>

    <div class="containerVueGenerale">
        <?php foreach ($utilisateurs as $utilisateur):
            ?>
            <article class="articleVueGenerale">
                <header>
                    <a href="Utilisateurs/utilisateur/<?= $utilisateur['id'] ?>">
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
