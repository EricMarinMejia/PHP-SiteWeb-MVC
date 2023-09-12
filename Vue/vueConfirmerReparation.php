<?php $titre = "Supprimer - " . $reparation['id']; ?>
<?php ob_start(); ?>
<article>
    <header>
        <p>
            <h1>Supprimer l'entrée de réparation #<?= $reparation['id'] ?></h1>
            <strong><?= $reparation['description_reparations'] ?></strong><br/>
            <?= $reparation['date_reparation_debut'] ?> - <?= $reparation['date_reparation_fin'] ?><br/>
            Pour le véhicule: #<?= $reparation['id_vehicule'] ?>
        </p>
    </header>
</article>

<form action="index.php?action=supprimerReparation" method="post">
    <input type="hidden" name="id" value="<?= $reparation['id'] ?>" /><br />
    <input type="submit" value="Oui" />
</form>
<form action="index.php" method="get" >
    <input type="submit" value="Annuler" />
</form>