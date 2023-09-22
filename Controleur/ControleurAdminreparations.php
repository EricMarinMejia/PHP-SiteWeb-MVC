<?php

require_once 'Modele/Reparation.php';
require_once 'Modele/Vehicule.php';
require_once 'Controleur/ControleurAdmin.php';

class ControleurAdminreparations extends ControleurAdmin
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
        $this->genererVue(array('reparation' => $reparation, 'vehicule' => $vehicule));
    }


    /**
     * Ajoute une réparation
     */
    public function nouvelleReparation()
    {
        $reparation['id_vehicule'] = $this->requete->getParametre("id_vehicule");
        $reparation['date_reparation_debut'] = $this->requete->getParametre("date_reparation_debut");
        $reparation['date_reparation_fin'] = $this->requete->getParametre("date_reparation_fin");
        $reparation['description_reparations'] = $this->requete->getParametre("description_reparations");
        $reparation['montant_paye'] = $this->requete->getParametre("montant_paye");
        $reparation['mechanicien'] = $this->requete->getParametre("mechanicien");
        
        $date_debut = strtotime($reparation['date_reparation_debut']);
        $date_fin = strtotime($reparation['date_reparation_fin']);
        
        if (date("Y-m-d", $date_debut) <= date("Y-m-d", $date_fin))
        {
            $this->reparation->setReparation($reparation);
            $this->executerAction("index");
        }
        else
        {
            throw new Exception("Date de fin avant date de debut");
        }
    }

    /**
     * Supprime une réparation
     */
    function supprimerReparation()
    {
        $id = $this->requete->getParametre("id");
        $reparation = $this->reparation->getReparation($id);
        $this->reparation->deleteReparation($id);
        $this->executerAction("index");
    }


    /**
     * Fonction qui confirme la suppression d'une réparation
     */
    function confirmerReparation()
    {
        $id = $this->requete->getParametre("id");
        $reparation = $this->reparation->getReparation($id);
        $this->genererVue(array('reparation' => $reparation));
    }


    /**
     * Affiche la vue pour modifier une réparation
     */
    public function modifierReparation()
    {
        $id = $this->requete->getParametre("id");
        $reparation = $this->reparation->getReparation($id);
        $this->genererVue(array('reparation' => $reparation));
    }


    /**
     * Modifie une réparation
     */
    public function miseAJourReparation()
    {
        $reparation['id'] = $this->requete->getParametre("id");
        $reparation['id_vehicule'] = $this->requete->getParametre("id_vehicule");
        $reparation['date_reparation_debut'] = $this->requete->getParametre("date_reparation_debut");
        $reparation['date_reparation_fin'] = $this->requete->getParametre("date_reparation_fin");
        $reparation['description_reparations'] = $this->requete->getParametre("description_reparations");
        $reparation['montant_paye'] = $this->requete->getParametre("montant_paye");
        $reparation['mechanicien'] = $this->requete->getParametre("mechanicien");

        $date_debut = strtotime($reparation['date_reparation_debut']);
        $date_fin = strtotime($reparation['date_reparation_fin']);

        if (date("Y-m-d", $date_debut) <= date("Y-m-d", $date_fin))
        {
            $this->reparation->updateReparation($reparation);
            $this->executerAction("index");
        }
        else
        {
            throw new Exception("Date de fin avant date de debut");
        }
    }

}