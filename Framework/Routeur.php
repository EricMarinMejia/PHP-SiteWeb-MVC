<?php

require_once 'Requete.php';
require_once 'Vue.php';

class Routeur
{
    private $ctrReparation;

    public function routerRequete()
    {
        try {
            $requete = new Requete(array_merge($_GET, $_POST));

            $controleur = $this->creerControleur($requete);
            $action = $this->creerAction($requete);

            $controleur->executerAction($action);
            
        } catch (Exception $e) {
            $this->gererErreur($e);
        }
    }


    private function creerControleur(Requete $requete)
    {
        $controleurReparations = Configuration::get("defaut");

        if ($requete->getSession()->existeAttribut("utilisateur")) {
            $controleurReparations = 'Admin' . $controleurReparations;
        }

        $controleur = $controleurReparations;

        if ($requete->existeParametre('controleur'))
        {
            $controleur = $requete->getParametre('controleur');
            $controleur = ucfirst(strtolower($controleur));
        }

        $classeControleur = "Controleur" . $controleur;
        $fichierControleur = "Controleur/" . $classeControleur . ".php";

        if (file_exists($fichierControleur))
        {
            require($fichierControleur);
            $controleur = new $classeControleur();
            $controleur->setRequete($requete);
            return $controleur;
        }
        else{
            throw new Exception("Fichier '$fichierControleur' introuvable");
        }
    }


    private function creerAction(Requete $requete)
    {
        $action = "index";

        if ($requete->existeParametre('action'))
        {
            $action = $requete->getParametre('action');
        }

        return $action;
    }


    private function gererErreur(Exception $exception)
    {
        $vue = new Vue("Erreur");
        $vue->generer(array('msgErreur' => $exception->getMessage()));
    }

}