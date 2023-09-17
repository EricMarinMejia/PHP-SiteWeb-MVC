<?php

require_once 'Modele/Reparation.php';
require_once 'Modele/Vehicule.php';
require_once 'Vue/Vue.php';

class ControleurReparation
{
    private $reparation;
    private $vehicule;

    public function __construct()
    {
        $this->reparation = new Reparation();
    }


    /**
     * Affiche toutes les réparations
     */
    public function reparations()
    {
        $reparations = $this->reparation->getReparations();
        $vue = new Vue("Reparations");
        $vue->generer(array('reparations' => $reparations));
    }


    /**
     * Affiche une réparation
     */
    public function reparation($id)
    {
        $reparation = $this->reparation->getReparation($id);
        $vehicule = $this->vehicule->getVehicule($reparation['id_vehicule']);
        $vue = new Vue("Reparation");
        $vue->generer(array('reparation' => $reparation, 'vehicule' => $vehicule)); //JE PENSE QU'IL FAUDRA ENVOYER LE VEHICULE AUSSI
    }


    /**
     * Ajoute une réparation
     */
    public function nouvelleReparation($reparation)
    {
        $this->reparation->setReparation($reparation);
        $this->reparations();
    }

    /**
     * Supprime une réparation
     */
    function supprimerReparation($id)
    {
        $reparation = getReparation($id);
        $this->reparation->deleteReparation($id);
        $this->reparations();
    }


    /**
     * Fonction qui confirme la suppression d'une réparation
     */
    function confirmerReparation($id)
    {
        $reparation = getReparation($id);
        $vue = new Vue("ConfirmerReparation");
        $vue->generer(array('reparation' => $reparation));
    }


    /**
     * Affiche la vue pour modifier une réparation
     */
    public function modifierReparation($id)
    {
        $reparation = $this->reparation->getReparation($id);
        $vue = new Vue("ModifierReparation");
        $vue->generer(array('reparation' => $reparation));
    }


    /**
     * Modifie une réparation
     */
    public function miseAJourReparation($reparation)
    {
        $this->reparation->updateReparation($reparation);
        $this->reparations();
    }

}