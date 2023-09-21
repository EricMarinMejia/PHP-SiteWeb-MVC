<?php

require_once 'Modele/Utilisateur.php';
require_once 'Modele/Vehicule.php';
require_once 'Framework/Vue.php';
require_once 'Framework/Controleur.php';

class ControleurUtilisateurs extends Controleur
{
    private $utilisateur;
    private $vehicules;

    public function __construct()
    {
        $this->utilisateur = new Utilisateur();
        $this->vehicules = new Vehicule();
    }

    /**
     * Fonction pour les utilisateurs
     */
    public function index()
    {
        $utilisateurs = $this->utilisateur->getUtilisateurs();
        $this->genererVue(array('utilisateurs' => $utilisateurs));
    }


    /**
     * Fonction pour un utilisateur
     */
    public function utilisateur()
    {
        $id = $id = $this->requete->getParametre("id");
        $utilisateur = $this->utilisateur->getUtilisateur($id);
        $vehicules = $this->utilisateur->getVehiculesUtilisateur($id);
        $this->genererVue(array('utilisateur' => $utilisateur, 'vehicules' => $vehicules)); //IL FAUDRA ENVOYER L'UTILISATEUR AUSSI
    }
}