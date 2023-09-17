<?php $this->titre = "Vehicule automobile #" . $vehicule['id']; ?>

<!-- Section pour les info de la réparation -->
<article>
    <header>
        <h1 class="titreVehicule">Informations pour le vehicule #<?= $vehicule['id'] ?></h1>
        <hr />
    </header>

    <p><strong>ID du véhicule: </strong><?= $vehicule['id'] ?></p>
    <p><strong>ID du propriétaire: </strong><?= $vehicule['id_utilisateur'] ?></p>
    <p><strong>Marque: </strong><?= $vehicule['marque'] ?></p>
    <p><strong>Modèle: </strong><?= $vehicule['modele'] ?></p>
    <p><strong>Plaque: </strong><?= $vehicule['plaque'] ?></p>
    <p><strong>Kilometrage: </strong><?= $vehicule['kilometrage'] ?>km</p>
</article>

<!-- Section pour l'info de l'utilisateur liée au véhicule -->
<!-- tous les véhicules doivent avoir un user liée (1 min et 1 max) -->
<a href="<?= "index.php?action=utilisateur&id=" . $utilisateur['id'] ?>"><h2 id="titreUtilisateurVehicule">Voir le profil utilisateur #<?= $utilisateur['id'] ?></h2></a>
<h2 id="titreReparationsVehicule">Voir les réparations de ce véhicule</h2>
    <ul>
        <?php foreach($reparations as $reparation): ?>
            <a href="<?= "index.php?action=reparation&id=" . $reparation['id'] ?>"><li>#<?= $reparation['id'] ?>: <?= $reparation['date_reparation_debut'] ?> -  <?= $reparation['date_reparation_fin'] ?></li></a>
        <?php endforeach ?>
    </ul>