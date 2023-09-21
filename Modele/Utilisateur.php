<?php

require_once 'Framework/Modele.php';

class Utilisateur extends Modele
{
    /**
     * Renvoie tous les utilisateurs
     */
    public function getUtilisateurs()
    {
        $sql = 'select * from utilisateurs' . ' order by nom asc, prenom asc, id desc';
        $utilisateurs = $this->executerRequete($sql);
        return $utilisateurs;
    }


    /**
     * Renvoie un utilisateur véhicule
     */
    public function getUtilisateur($id)
    {
        $sql = 'select * from utilisateurs'
                . ' where id = ?';
        $utilisateur = $this->executerRequete($sql, array($id));

        if ($utilisateur->rowCount() == 1) {
            return $utilisateur->fetch();
        } else {
            throw new Exception("Aucun utilisateur ne correspond à l'identifiant '$id'");
        }
    }


    /**
     * Renvoie les vehicules d'un utilisateur
     */
    public function getVehiculesUtilisateur($id)
    {
        $sql = 'select * from vehicules'
                . ' where id_utilisateur = ?';
        $vehicules = $this->executerRequete($sql, array($id));

        if ($vehicules->rowCount() >= 0) {
            $data = $vehicules->fetchAll(\PDO::FETCH_ASSOC);
            return $data;     
        } else {
            throw new Exception("Aucun vehicule ne correspond à l'identifiant '$id'");
        }
    }
}