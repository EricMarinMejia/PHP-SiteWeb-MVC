<?php $this->titre = "Réparation automobile #" . $reparation['id']; ?>

<!-- Section pour les info de la réparation -->
<article>
    <header>
        <h1 class="titreReparation">Informations pour la réparation #<?= $reparation['id'] ?></h1>
        <time><?= $reparation['date_reparation_debut'] ?></time> - <time><?= $reparation['date_reparation_fin'] ?></time>
        <hr />
    </header>

    <p><strong>ID du véhicule: </strong><?= $reparation['id_vehicule'] ?></p>
    <p><strong>Description de la réparation: </strong><?= $reparation['description_reparations'] ?></p>
    <p><strong>Montant payé: </strong><?= $reparation['montant_paye'] ?>$</p>
    <p><strong>Méchanicien en charge: </strong><?= $reparation['mechanicien'] ?></p>
</article>

<!-- Section pour l'info du véhicule liée à la réparation -->
<a href="Vehicules/vehicule/<?= $vehicule['id'] ?>"><h2 id="titreVehiculeReparation">Voir le vehicule #<?= $vehicule['id'] ?></h2></a>


