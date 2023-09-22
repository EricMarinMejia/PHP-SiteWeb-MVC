<?php

require_once 'Modele/Utilisateur.php';
require_once 'Modele/Vehicule.php';
require_once 'Framework/Vue.php';
require_once 'Controleur/ControleurAdmin.php';

class ControleurAdminUtilisateurs extends ControleurAdmin
{
    private $utilisateur;
    private $vehicules;

    public function __construct()
    {
        $this->utilisateur = new Utilisateur();
        $this->vehicules = new Vehicule();
    }

   
    public function index()
    {
        $utilisateurs = $this->utilisateur->getUtilisateurs();
        $this->genererVue(array('utilisateurs' => $utilisateurs, 'utilisateur' => $this->requete->getSession()->getAttribut("utilisateur")));
    }


    /**
     * Fonction pour un utilisateur
     */
    public function utilisateur()
    {
        $id = $id = $this->requete->getParametre("id");
        $utilisateurEntree = $this->utilisateur->getUtilisateur($id);
        $vehicules = $this->utilisateur->getVehiculesUtilisateur($id);
        $this->genererVue(array('utilisateurEntree' => $utilisateurEntree, 'vehicules' => $vehicules));
    }


    public function deconnecter()
    {
        $this->requete->getSession()->detruire();
        $this->rediriger("");
    }
}