<?php $titre = 'Système de gestion de réparations automobiles'; ?>
<!-- CE FICHIER JOUE LE RÔLE DE vueReparations.php -->
<?php ob_start(); ?>

<form action="nouvelleReparation.php" method="post">
    <h2>Ajouter une réparation</h2>
        <p>
            <label for="id_vehicule">Id du véhicule</label> : <input class="formInput" type="number" min=0 name="id_vehicule" /><br />
            <label for="date_reparation_debut">Date de début</label> :  <input class="formInput" type="date" name="date_reparation_debut" /><br />
            <label for="date_reparation_fin">Date de fin</label> :  <input class="formInput" type="date" name="date_reparation_fin" /><br />
            <label for="description_reparations">Description</label> :  <textarea class="formInput" type="text" name="description_reparations"></textarea><br />
            <label for="montant_paye">Montant payé ($)</label> : <input class="formInput" type="number" min=0 name="montant_paye" /><br />
            <label for="mechanicien">Méchanicien</label> : <input class="formInput" type="text" name="mechanicien" /><br />
            <!-- <input type="hidden" name="article_id" value="<= $article['id'] ?>" /><br /> -->
            <input type="submit" value="Envoyer" />
        </p>
</form>

<div class="divCentralCategories">

    <section></section>

    <div class="containerVueGenerale">
        <?php foreach ($reparations as $reparation):
            ?>
            <article class="articleVueGenerale">
                <header>
                    <a href="<?= "reparation.php?id=" . $reparation['id'] ?>">
                        <h1 class="titreReparation">Réparation #<?= $reparation["id"]  ?></h1>
                    </a>
                        <h3><?= $reparation['description_reparations'] ?></h3>
                        <time><?= $reparation['date_reparation_debut'] ?></time> - <time><?= $reparation['date_reparation_fin'] ?></time>
                <header>
            </article>
            <hr id="hrArticles"/>
        <?php endforeach; ?>
    </div>

    <section></section>

</div>
<?php $contenu = ob_get_clean(); ?>

<?php require 'gabarit.php'; ?>

