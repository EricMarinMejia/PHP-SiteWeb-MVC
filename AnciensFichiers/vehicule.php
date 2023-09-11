<?php

require 'Modele.php';

try {
    //Check si l'id existe
    if (isset($_GET['id'])) {
        // intval renvoie la valeur numérique du paramètre ou 0 en cas d'échec
        $id = intval($_GET['id']);

        if ($id !=  0) {
            $vehicule = getVehicule($id);
            $utilisateur = getUtilisateur($vehicule['id_utilisateur']);
            $reparations = getReparationsVehicule($id);
            require 'vueVehicule.php';
        } else {
            throw new Exception("Identifiant de véhicule incorrect.");
        }

    } else {
        throw new Exception("Aucun identifiant de véhicule fourni.");
    }
} catch (Exception $e) {
    $msgErreur = $e->getMessage();
    require 'vueErreur.php';
}