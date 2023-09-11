<?php
require 'Modele.php';
try {
    $vehicules = getVehicules();
    require 'vueVehicules.php';
} catch (Exception $e) {
    $msgErreur = $e->getMessage();
    require 'vueErreur.php';
}