<?php $this->titre = "Profil utilisateur #" . $utilisateur['id']; ?>

<!-- Section pour les info de la réparation -->
<article>
    <header>
        <h1 class="titreUtilisateur">Informations pour l'utilisateur #<?= $utilisateur['id'] ?></h1>
        <hr />
    </header>

    <p><strong>ID de l'utilisateur: </strong><?= $this->nettoyer($utilisateur['id']) ?></p>
    <p><strong>Nom complet: </strong><?= $this->nettoyer($utilisateur['prenom']) ?> <?= $this->nettoyer($utilisateur['nom']) ?></p>
    <p><strong>Adresse: </strong><?= $this->nettoyer($utilisateur['adresse']) ?></p>
    <p><strong>Âge: </strong><?= $this->nettoyer($utilisateur['age']) ?></p>
    <p><strong>Téléphone: </strong><?= $this->nettoyer($utilisateur['telephone']) ?></p>
    <p><strong>Courriel: </strong><?= $this->nettoyer($utilisateur['courriel']) ?></p>
</article>

<!-- Section pour les véhicules liée à la cet utilisateur -->
<!-- Un user peut avoir 0 ou + de véhicules -->
<h2 id="titreUtilisateurVehicule">Voir les véhicules de cet utilisateur</h2>
    <ul>
        <?php foreach($vehicules as $vehicule): ?>
            <a href="Vehicules/vehicule/<?= $vehicule['id'] ?>"><li>#<?= $this->nettoyer($vehicule['id']) ?>: <?= $this->nettoyer($vehicule['marque']) ?> <?= $this->nettoyer($vehicule['modele']) ?></li></a>
        <?php endforeach ?>
    </ul>
