<?php

require_once 'Modele/Vehicule.php';
require_once 'Modele/Utilisateur.php';
require_once 'Modele/Reparation.php';
require_once 'Framework/Vue.php';
require_once 'Controleur/ControleurAdmin.php';

class ControleurAdminVehicules extends ControleurAdmin
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
        $utilisateurEntree = $this->utilisateur->getUtilisateur($vehicule['id_utilisateur']);
        $this->genererVue(array('vehicule' => $vehicule, 'reparations' => $reparations, 'utilisateurEntree' => $utilisateurEntree));
    }


    /**
     * Fonction pour un nouveau véhicule
     */
    public function nouveauVehicule()
    {
        $vehicule['id_utilisateur'] = $this->requete->getParametre("id_utilisateur");
        $vehicule['marque'] = $this->requete->getParametre("marque");
        $vehicule['modele'] = $this->requete->getParametre("modele");
        $vehicule['plaque'] = $this->requete->getParametre("plaque");
        $vehicule['kilometrage'] = $this->requete->getParametre("kilometrage");

        $this->vehicule->setVehicule($vehicule);
        $this->executerAction("index");
    }
}