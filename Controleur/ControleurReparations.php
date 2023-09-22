<?php

require_once 'Modele/Reparation.php';
require_once 'Modele/Vehicule.php';
require_once 'Framework/Vue.php';
require_once 'Framework/Controleur.php';

class ControleurReparations extends Controleur
{
    private $reparation;
    private $vehicule;

    public function __construct()
    {
        $this->reparation = new Reparation();
        $this->vehicule = new Vehicule();
    }


    /**
     * Affiche toutes les réparations
     */
    public function index()
    {
        $reparations = $this->reparation->getReparations();
        $this->genererVue(array('reparations' => $reparations));
    }


    /**
     * Affiche une réparation
     */
    public function reparation()
    {
        $id = $this->requete->getParametre("id");
        $reparation = $this->reparation->getReparation($id);
        $vehicule = $this->vehicule->getVehicule($reparation['id_vehicule']);
        $this->genererVue(array('reparation' => $reparation, 'vehicule' => $vehicule)); //JE PENSE QU'IL FAUDRA ENVOYER LE VEHICULE AUSSI
    }
    
}