<?php
require 'Modele.php';
try {
    $reparations = getReparations();
    require 'vueAccueil.php';
} catch (Exception $e) {
    $msgErreur = $e->getMessage();
    require 'vueErreur.php';
}