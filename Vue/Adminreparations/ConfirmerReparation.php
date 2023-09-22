<?php $this->titre = "Supprimer - " . $reparation['id']; ?>

<div class="cardContainer">
    <div class="cardDiv">
        <header>
            <p>
                <h1>Supprimer l'entrée de réparation #<?= $this->nettoyer($reparation['id']) ?>?</h1>
                <strong><?= $this->nettoyer($reparation['description_reparations']) ?></strong><br/>
                <?= $this->nettoyer($reparation['date_reparation_debut']) ?> - <?= $this->nettoyer($reparation['date_reparation_fin']) ?><br/>
                Pour le véhicule: #<?= $this->nettoyer($reparation['id_vehicule']) ?>
            </p>
        </header>
        <div class="cardButtonContainer">
            <form class="formCard" action="Adminreparations/supprimerReparation/<?= $reparation['id'] ?>" method="post">
                <input type="hidden" name="id" value="<?= $reparation['id'] ?>" />
                <input class="boutonOui" type="submit" value="Confirmer" />
            </form>
            <form class="formCard" action="Adminreparations/" method="get" >
                <input class="boutonAnnuler" type="submit" value="Annuler" />
            </form>
        </div>
    </div>
</div>
