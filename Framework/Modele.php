<?php

abstract class Modele {

    private $bdd;

    protected function executerRequete($sql, $params = null)
    {
        if ($params == null)
        {
            $resultat = $this->getBdd()->query($sql);
        }
        else
        {
            $resultat = $this->getBdd()->prepare($sql);
            $resultat->execute($params);
        }

        return $resultat;
    }


    /**
     * Connexion vers la BDD.
     */
    private function getBdd()
    {
        if ($this->bdd == null)
        {
            $this->bdd = new PDO('mysql:host=localhost;dbname=reparations_automobiles_v0_0_1;charset=utf8',
            'root', 'mysql', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
        return $bdd;
    }
}
