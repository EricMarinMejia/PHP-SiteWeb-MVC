<?php $this->titre = "Profil utilisateur #" . $utilisateur['id']; ?>

<!-- Section pour les info de la réparation -->
<article>
    <header>
        <h1 class="titreUtilisateur">Informations pour l'utilisateur #<?= $utilisateur['id'] ?></h1>
        <hr />
    </header>

    <p><strong>ID de l'utilisateur: </strong><?= $utilisateur['id'] ?></p>
    <p><strong>Nom complet: </strong><?= $utilisateur['prenom'] ?> <?= $utilisateur['nom'] ?></p>
    <p><strong>Adresse: </strong><?= $utilisateur['adresse'] ?></p>
    <p><strong>Âge: </strong><?= $utilisateur['age'] ?></p>
    <p><strong>Téléphone: </strong><?= $utilisateur['telephone'] ?></p>
    <p><strong>Courriel: </strong><?= $utilisateur['courriel'] ?></p>
</article>

<!-- Section pour les véhicules liée à la cet utilisateur -->
<!-- Un user peut avoir 0 ou + de véhicules -->
<h2 id="titreUtilisateurVehicule">Voir les véhicules de cet utilisateur</h2>
    <ul>
        <?php foreach($vehicules as $vehicule): ?>
            <a href="Vehicules/vehicule/<?= $vehicule['id'] ?>"><li>#<?= $vehicule['id'] ?>: <?= $vehicule['marque'] ?> <?= $vehicule['modele'] ?></li></a>
        <?php endforeach ?>
    </ul>
