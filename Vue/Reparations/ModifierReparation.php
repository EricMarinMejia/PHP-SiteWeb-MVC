<?php $this->titre = "Modifier - " . $reparation['id']; ?>

<form action="Reparations/miseAJourReparation" method="post">
    <h2>Ajouter une réparation</h2>
        <p>
        <input type="hidden" name="id" value="<?= $reparation['id'] ?>" />
            <label for="id_vehicule">Id du véhicule</label> : <input class="formInput" type="number" min=0 name="id_vehicule" value="<?= $this->nettoyer($reparation['id_vehicule']) ?>" /><br />
            <label for="date_reparation_debut">Date de début</label> :  <input class="formInput" type="date" name="date_reparation_debut" value="<?= $this->nettoyer($reparation['date_reparation_debut']) ?>" /><br />
            <label for="date_reparation_fin">Date de fin</label> :  <input class="formInput" type="date" name="date_reparation_fin" value="<?= $this->nettoyer($reparation['date_reparation_fin']) ?>" /><br />
            <label for="description_reparations">Description</label> :  <textarea class="formInput" type="text" name="description_reparations"><?= $this->nettoyer($reparation['description_reparations']) ?></textarea><br />
            <label for="montant_paye">Montant payé ($)</label> : <input class="formInput" type="number" min=0 name="montant_paye" value="<?= $this->nettoyer($reparation['montant_paye']) ?>" /><br />
            <label for="mechanicien">Méchanicien</label> : <input class="formInput" type="text" name="mechanicien" value="<?= $this->nettoyer($reparation['mechanicien']) ?>" /><br />
            <input type="submit" value="Modifier" />
        </p>
</form>
