<?php $this->titre = "Administration" ?>
<h2>Administration</h2>
Bienvenue, <?= $this->nettoyer($login) ?> !
Ce site contient <?= $this->nettoyer($nbReparations) ?> entrées de réparations(s),
 <?= $this->nettoyer($nbVehicules) ?> vehicule(s) enregistrés et <?= $this->nettoyer($nbUtilisateurs) ?> utilisateurs inscrits.

 <br />

<form class="formCard" action="Connexion/deconnecter">
    <input type="submit" value="Déconnexion" />
</form>


