<?php

require_once 'Modele/Vehicule.php';
require_once 'Modele/Utilisateur.php';
require_once 'Modele/Reparation.php';
require_once 'Framework/Vue.php';
require_once 'Framework/Controleur.php';

class ControleurVehicules extends Controleur
{
    private $vehicule;
    private $reparations;
    private $utilisateur;

    public function __construct()
    {
        $this->vehicule = new Vehicule();
        $this->reparations = new Reparation();
        $this->utilisateur = new Utilisateur();
    }

    /**
     * Fonctions pour les véhicules
     */
    public function index()
    {
        $vehicules = $this->vehicule->getVehicules();
        $this->genererVue(array('vehicules' => $vehicules));
    }


    /**
     * Fonction pour un vehicule
     */
    public function vehicule()
    {
        $id = $this->requete->getParametre("id");
        $vehicule = $this->vehicule->getVehicule($id);
        $reparations = $this->vehicule->getReparationsVehicule($id);
        $utilisateur = $this->utilisateur->getUtilisateur($vehicule['id_utilisateur']);
        $this->genererVue(array('vehicule' => $vehicule, 'reparations' => $reparations, 'utilisateur' => $utilisateur)); //IL FAUDRA ENVOYER L'UTILISATEUR AUSSI
    }

}