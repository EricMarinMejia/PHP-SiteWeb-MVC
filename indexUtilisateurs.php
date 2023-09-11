<?php
require 'Modele.php';
try {
    $utilisateurs = getUtilisateurs();
    require 'vueUtilisateurs.php';
} catch (Exception $e) {
    $msgErreur = $e->getMessage();
    require 'vueErreur.php';
}