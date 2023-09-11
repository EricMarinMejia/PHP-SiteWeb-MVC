<?php

require 'Modele.php';

try {
    if (isset($_POST['id_vehicule'])) {
        $id = intval($_POST['id_vehicule']);

        if ($id != 0) {
            $vehicule = getVehicule($id);
            $reparation = $_POST;

            $date_debut = strtotime($reparation['date_reparation_debut']);
            $date_fin = strtotime($reparation['date_reparation_fin']);

            if (date("Y-m-d", $date_debut) <= date("Y-m-d", $date_fin)) {
                setReparation($reparation);
                header('Location: index.php');
            } else {
                throw new Exception("Date de fin avant date de debut");
            }

        } else {
            throw new Exception("Identifiant du véhicule incorrect");
        }
    } else {
        throw new Exception("Aucun identifiant de véhicule");
    }
} catch (Exception $e) {
    $msgErreur = $e->getMessage();
    require 'vueErreur.php';
}