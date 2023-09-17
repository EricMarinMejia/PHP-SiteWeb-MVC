<?php

require_once 'Modele/Vehicule.php';
require_once 'Modele/Utilisateur.php';
require_once 'Vue/Vue.php';

class ControleurVehicule
{
    private $vehicule;
    private $reparations;
    private $utilisateur;

    public function __construct()
    {
        $this->vehicule = new Vehicule();
    }

    /**
     * Fonctions pour les véhicules
     */
    public function vehicules()
    {
        $vehicules = $this->vehicule->getVehicules();
        $vue = new Vue("Vehicules");
        $vue->generer(array('vehicules' => $vehicules));
    }


    /**
     * Fonction pour un vehicule
     */
    public function vehicule($idVehicule)
    {
        $vehicule = $this->vehicule->getVehicule($id);
        $reparations = $this->reparations->getReparationsVehicule($id);
        $utilisateur = $this->utilisateur->getUtilisateur($vehicule['id_utilisateur']);
        $vue = new Vue("Vehicule");
        $vue->generer(array('vehicule' => $vehicule, 'reparations' => $reparations, 'utilisateur' => $utilisateur)); //IL FAUDRA ENVOYER L'UTILISATEUR AUSSI
    }


    /**
     * Fonction pour un nouveau véhicule
     */
    public function nouveauVehicule($vehicule)
    {
        $this->vehicule->setVehicule($vehicule);
        $this->vehicules();
    }
}