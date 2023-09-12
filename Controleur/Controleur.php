<?php

require './Modele/Modele.php';

/**
 * Fonctions pour les réparations
 */
function accueil()
{
    $reparations = getReparations();
    require './Vue/vueAccueil.php';
}


/**
 * Fonction pour une réparation
 */
function reparation($idReparation)
{
    $reparation = getReparation($idReparation);
    $vehicule = getVehicule($reparation['id_vehicule']);
    require './Vue/vueReparation.php';
}


/**
 * Fonction pour supprimer une réparation
 */
function supprimerReparation($id)
{
    $reparation = getReparation($id);
    deleteReparation($id);
    header('Location: ./index.php');
}


/**
 * Fonction qui confirme la suppression d'une réparation
 */
function confirmerReparation($id)
{
    $reparation = getReparation($id);
    require './Vue/vueConfirmerReparation.php';
}



/**
 * Fonctions pour les véhicules
 */
function vehicules()
{
    $vehicules = getVehicules();
    require './Vue/vueVehicules.php';
}


/**
 * Fonction pour un vehicule
 */
function vehicule($idVehicule)
{
    $vehicule = getVehicule($idVehicule);
    $utilisateur = getUtilisateur($vehicule['id_utilisateur']);
    $reparations = getReparationsVehicule($idVehicule);
    require './Vue/vueVehicule.php';
}


/**
 * Fonction pour les utilisateurs
 */
function utilisateurs()
{
    $utilisateurs = getUtilisateurs();
    require './Vue/vueUtilisateurs.php';
}


/**
 * Fonction pour un utilisateur
 */
function utilisateur($idUtilisateur)
{
    $utilisateur = getUtilisateur($idUtilisateur);
    $vehicules = getVehiculesUtilisateur($idUtilisateur);
    require './Vue/vueUtilisateur.php';
}


/**
 * Fonction pour les erreurs
 */
function erreur($msgErreur)
{
    require './Vue/vueErreur.php';
}


/**
 * Fonction pour une nouvelle réparation
 */
function nouvelleReparation($reparation)
{
    setReparation($reparation);
    header('Location: ./index.php?');
}
