<?php $this->titre = "Réparation automobile #" . $reparation['id']; ?>

<!-- Section pour les info de la réparation -->
<article>
    <header>
        <h1 class="titreReparation">Informations pour la réparation #<?= $this->nettoyer($reparation['id']) ?></h1>
        <time><?= $this->nettoyer($reparation['date_reparation_debut']) ?></time> - <time><?= $this->nettoyer($reparation['date_reparation_fin']) ?></time>
        <hr />
    </header>

    <p><strong>Véhicule: </strong><?= $this->nettoyer($vehicule['marque']) ?> <?= $this->nettoyer($vehicule['modele']) ?></p>
    <p><strong>Description de la réparation: </strong><?= $this->nettoyer($reparation['description_reparations']) ?></p>
    <p><strong>Montant payé: </strong><?= $this->nettoyer($reparation['montant_paye']) ?>$</p>
    <p><strong>Méchanicien en charge: </strong><?= $this->nettoyer($reparation['mechanicien']) ?></p>
</article>

<!-- Section pour l'info du véhicule liée à la réparation -->
<a href="Adminvehicules/vehicule/<?= $vehicule['id'] ?>"><h2 id="titreVehiculeReparation">-> Voir le vehicule #<?= $this->nettoyer($vehicule['id']) ?>:
<?= $this->nettoyer($vehicule['marque']) ?> <?= $this->nettoyer($vehicule['modele']) ?> <-</h2></a>


