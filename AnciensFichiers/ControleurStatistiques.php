<?php
require_once 'Framework/ControleurAdmin.php';
require_once 'Modele/Reparation.php';
require_once 'Modele/Vehicule.php';
require_once 'Modele/Utilisateur.php';

class ControleurAdmin extends ControleurSecurise
{
    private $reparation;
    private $vehicule;
    private $utilisateur;
 

    public function __construct()
    {
        $this->reparation = new Reparation();
        $this->vehicule = new Vehicule();
        $this->utilisateur = new Utilisateur();
    }


    public function index()
    {
        $nbReparations = $this->reparation->getNombreReparations();
        $nbVehicules = $this->vehicule->getNombreVehicules();
        $nbUtilisateurs = $this->utilisateur->getNombreUtilisateurs();
        $login = $this->requete->getSession()->getAttribut("login");

        $this->genererVue(array('nbReparations' => $nbReparations,
        'nbVehicules' => $nbVehicules, 'nbUtilisateurs' => $nbUtilisateurs, 'login' => $login));
    }
}
