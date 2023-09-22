<?php

require_once 'Framework/Modele.php';

class Reparation extends Modele
{
   
    /**
     * Renvoie toutes les réparations.
     */
    public function getReparations()
    {
        $sql = 'select * from reparations' . ' order by date_reparation_debut desc, ID desc';
        $reparations = $this->executerRequete($sql);
        return $reparations;
    }


    /**
     * Renvoie une réparation spécifique.
     */
    public function getReparation($id)
    {
        $sql = 'select * from reparations'
                    . ' where ID=?';
        $reparation = $this->executerRequete($sql, array($id));

        if ($reparation->rowCount() == 1) {
            return $reparation->fetch();
        } else {
            throw new Exception("Aucune réparation ne correspond à l'identifiant '$id'");
        }
    }


    /*
    * Publie une réparation.
    */
    public function setReparation($reparation)
    {
        $sql = 'INSERT INTO reparations (id_vehicule, date_reparation_debut, date_reparation_fin, description_reparations, montant_paye, mechanicien) VALUES(?, ?, ?, ?, ?, ?)';
        $reparations = $this->executerRequete($sql, array($reparation['id_vehicule'], $reparation['date_reparation_debut'], $reparation['date_reparation_fin'], $reparation['description_reparations'], $reparation['montant_paye'], $reparation['mechanicien']));
        return $reparations;
    }


    /**
     * Supprime une réparation
     */
    public function deleteReparation($id)
    {
        $sql = 'DELETE FROM reparations'
                . ' WHERE id=?';
        $result = $this->executerRequete($sql, array($id));
        return $result;
    }

    /**
     * Modifie une réparation
     */
    public function updateReparation($reparation)
    {
        $sql = 'UPDATE reparations'
            . ' SET id_vehicule = ?, date_reparation_debut = ?, date_reparation_fin = ?, description_reparations = ?, montant_paye = ?, mechanicien = ?'
            . ' WHERE id = ?';
        $result = $this->executerRequete($sql, array($reparation['id_vehicule'], $reparation['date_reparation_debut'], $reparation['date_reparation_fin'], $reparation['description_reparations'], $reparation['montant_paye'], $reparation['mechanicien'], $reparation['id']));
        return $result;
    }


    public function getNombreReparations()
    {
        $sql = 'select count(*) as nbReparations from reparations';
        $result = $this->executerRequete($sql);
        $ligne = $result->fetch();
        return $ligne['nbReparations'];
    }

}