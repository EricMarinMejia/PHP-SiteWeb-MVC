<?php $this->titre = "Supprimer - " . $reparation['id']; ?>

<div class="cardContainer">
    <div class="cardDiv">
        <header>
            <p>
                <h1>Supprimer l'entrée de réparation #<?= $reparation['id'] ?>?</h1>
                <strong><?= $reparation['description_reparations'] ?></strong><br/>
                <?= $reparation['date_reparation_debut'] ?> - <?= $reparation['date_reparation_fin'] ?><br/>
                Pour le véhicule: #<?= $reparation['id_vehicule'] ?>
            </p>
        </header>
        <div class="cardButtonContainer">
            <form class="formCard" action="Reparations/supprimerReparation/<?= $reparation['id'] ?>" method="post">
                <input type="hidden" name="id" value="<?= $reparation['id'] ?>" />
                <input class="boutonOui" type="submit" value="Confirmer" />
            </form>
            <form class="formCard" action="Reparations/" method="get" >
                <input class="boutonAnnuler" type="submit" value="Annuler" />
            </form>
        </div>
    </div>
</div>