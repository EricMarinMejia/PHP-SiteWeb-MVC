<?php

require_once 'Controleur/ControleurReparation.php';

class Routeur
{
    private $ctrReparation;

    public function __construct()
    {
        $this->ctrReparation = new ControleurReparation();
    }

    public function routerRequete()
    {
        try {
            if (isset($_GET['action']))
            {
                
                if ($_GET['action'] == 'apropos')
                {
                    $this->apropos();
                }
            }
            else 
            {
                $this->ctrReparation->reparations();
            }
            
        } catch (Exception $e) {
            $this->erreur($e->getMessage());
        }
    }


    private function erreur($msgErreur)
    {
        $vue = new Vue("Erreur");
        $vue->generer(array('msgErreur' => $msgErreur));
    }


    private function apropos() {
        $vue = new Vue("Apropos");
        $vue->generer();
    }


    private function getParametre($tableau, $nom)
    {
        if (isset($tableau[$nom]))
        {
            return $tableau[$nom];
        }
        else
        {
            throw new Exception("Parametre '$nom' absent");
        }
    }

}