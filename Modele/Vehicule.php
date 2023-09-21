<?php

require_once 'Framework/Modele.php';

class Vehicule extends Modele
{
    /*
    * Renvoie tous les véhicules
    */
    public function getVehicules()
    {
        $sql = 'select * from vehicules' . ' order by id desc';
        $vehicules = $this->executerRequete($sql);
        return $vehicules;
    }


    /**
     * Renvoie un véhicule spécifique
     */
    public function getVehicule($id)
    {
        $sql = 'select * from vehicules'
                . ' where id = ?';
        $vehicule = $this->executerRequete($sql, array($id));

        if ($vehicule->rowCount() == 1) {
            return $vehicule->fetch();
        } else {
            throw new Exception("Aucun véhicule ne correspond à l'identifiant '$id'");
        }
    }


    /**
    * Renvoie les réparations d'un véhicule
    */
    public function getReparationsVehicule($id)
    {
        $sql = 'select * from reparations'
                . ' where id_vehicule = ?';
        $reparations = $this->executerRequete($sql, array($id));

        if ($reparations->rowCount() >= 0) {
            $data = $reparations->fetchAll(\PDO::FETCH_ASSOC);
            return $data;     
        }
    }


    /**
    * Post un véhicule
    */
    public function setVehicule($vehicule)
    {
        $sql = 'INSERT INTO vehicules (id_utilisateur, marque, modele, plaque, kilometrage) VALUES(?, ?, ?, ?, ?)';
        $vehicules = $this->executerRequete($sql, array($vehicule['id_utilisateur'], $vehicule['marque'], $vehicule['modele'], $vehicule['plaque'], $vehicule['kilometrage']));
        return $vehicules;
    }
}