<?php $this->titre = "Profil utilisateur #" . $utilisateurEntree['id']; ?>

<!-- Section pour les info de la réparation -->
<article>
    <header>
        <h1 class="titreUtilisateur">Informations pour l'utilisateur #<?= $utilisateurEntree['id'] ?></h1>
        <hr />
    </header>

    <p><strong>Nom complet: </strong><?= $this->nettoyer($utilisateurEntree['prenom']) ?> <?= $this->nettoyer($utilisateurEntree['nom']) ?></p>
    <p><strong>Adresse: </strong><?= $this->nettoyer($utilisateurEntree['adresse']) ?></p>
    <p><strong>Âge: </strong><?= $this->nettoyer($utilisateurEntree['age']) ?></p>
    <p><strong>Téléphone: </strong><?= $this->nettoyer($utilisateurEntree['telephone']) ?></p>
    <p><strong>Courriel: </strong><?= $this->nettoyer($utilisateurEntree['courriel']) ?></p>
    <p><strong>Administrateur? </strong><?= $this->nettoyer($utilisateurEntree['admin']) == 1 ? "Oui" : "Non" ?></p>
</article>

<!-- Section pour les véhicules liée à la cet utilisateur -->
<!-- Un user peut avoir 0 ou + de véhicules -->
<h2 id="titreUtilisateurVehicule">Voir les véhicules de cet utilisateur</h2>
    <ul>
        <?php foreach($vehicules as $vehicule): ?>
            <a href="Vehicules/vehicule/<?= $vehicule['id'] ?>"><li>-> #<?= $this->nettoyer($vehicule['id']) ?>: <?= $this->nettoyer($vehicule['marque']) ?> <?= $this->nettoyer($vehicule['modele']) ?> <-</li></a>
        <?php endforeach ?>
    </ul>
