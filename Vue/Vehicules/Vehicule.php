<?php $this->titre = "Vehicule automobile #" . $vehicule['id']; ?>

<!-- Section pour les info de la réparation -->
<article>
    <header>
        <h1 class="titreVehicule">Informations pour le vehicule #<?= $this->nettoyer($vehicule['id']) ?></h1>
        <hr />
    </header>

    <p><strong>ID du véhicule: </strong><?= $this->nettoyer($vehicule['id']) ?></p>
    <p><strong>ID du propriétaire: </strong><?= $this->nettoyer($vehicule['id_utilisateur']) ?></p>
    <p><strong>Marque: </strong><?= $this->nettoyer($vehicule['marque']) ?></p>
    <p><strong>Modèle: </strong><?= $this->nettoyer($vehicule['modele']) ?></p>
    <p><strong>Plaque: </strong><?= $this->nettoyer($vehicule['plaque']) ?></p>
    <p><strong>Kilometrage: </strong><?= $this->nettoyer($vehicule['kilometrage']) ?>km</p>
</article>

<!-- Section pour l'info de l'utilisateur liée au véhicule -->
<!-- tous les véhicules doivent avoir un user liée (1 min et 1 max) -->
<a href="Utilisateurs/utilisateur/<?= $utilisateur['id'] ?>"><h2 id="titreUtilisateurVehicule">Voir le profil utilisateur #<?= $this->nettoyer($utilisateur['id']) ?></h2></a>
<h2 id="titreReparationsVehicule">Voir les réparations de ce véhicule</h2>
    <ul>
        <?php foreach($reparations as $reparation): ?>
            <a href="Reparations/reparation/<?= $reparation['id'] ?>"><li>#<?= $this->nettoyer($reparation['id']) ?>: <?= $this->nettoyer($reparation['date_reparation_debut']) ?> -  <?= $this->nettoyer($reparation['date_reparation_fin']) ?></li></a>
        <?php endforeach ?>
    </ul>