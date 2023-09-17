<?php

require_once 'Modele/Utilisateur.php';
require_once 'Vue/Vue.php';

class ControleurUtilisateur
{
    private $utilisateur;
    private $vehicules;

    public function __construct()
    {
        $this->utilisateur = new Utilisateur();
    }

    /**
     * Fonction pour les utilisateurs
     */
    public function utilisateurs()
    {
        $utilisateurs = $this->utilisateur->getUtilisateurs();
        $vue = new Vue("Utilisateurs");
        $vue->generer(array('utilisateurs' => $utilisateurs));
    }


    /**
     * Fonction pour un utilisateur
     */
    public function utilisateur($idUtilisateur)
    {
        $utilisateur = $this->utilisateur->getUtilisateur($id);
        $vehicules = $this->vehicules->getVehiculesUtilisateur($id);
        $vue = new Vue("Utilisateur");
        $vue->generer(array('utilisateur' => $utilisateur, 'vehicules' => $vehicules)); //IL FAUDRA ENVOYER L'UTILISATEUR AUSSI
    }
}