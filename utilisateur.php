<?php

require 'Modele.php';

try {
    //Check si l'id existe
    if (isset($_GET['id'])) {
        // intval renvoie la valeur numérique du paramètre ou 0 en cas d'échec
        $id = intval($_GET['id']);

        if ($id !=  0) {
            $utilisateur = getUtilisateur($id);
            $vehicules = getVehiculesUtilisateur($id);  //Array de tous les véhicules de cet user
            require 'vueUtilisateur.php';
        } else {
            throw new Exception("Identifiant d'utilisateur incorrect.");
        }

    } else {
        throw new Exception("Aucun identifiant d'utilisateur fourni.");
    }
} catch (Exception $e) {
    $msgErreur = $e->getMessage();
    require 'vueErreur.php';
}