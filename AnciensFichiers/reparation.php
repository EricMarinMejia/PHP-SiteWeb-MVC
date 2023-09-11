<?php

require 'Modele.php';

try {
    //Check si l'id existe
    if (isset($_GET['id'])) {
        // intval renvoie la valeur numérique du paramètre ou 0 en cas d'échec
        $id = intval($_GET['id']);

        if ($id !=  0) {
            $reparation = getReparation($id);
            $vehicule = getVehicule($reparation['id_vehicule']);
            require 'vueReparation.php';
        } else {
            throw new Exception("Identifiant de réparation incorrect.");
        }

    } else {
        throw new Exception("Aucun identifiant de réparation fourni.");
    }
} catch (Exception $e) {
    $msgErreur = $e->getMessage();
    require 'vueErreur.php';
}