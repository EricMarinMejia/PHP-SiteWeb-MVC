<?php

require_once 'Modele/Utilisateur.php';
require_once 'Modele/Vehicule.php';
require_once 'Framework/Vue.php';
require_once 'Framework/Controleur.php';

class ControleurUtilisateurs extends Controleur
{
    private $utilisateur;
    private $vehicules;

    public function __construct()
    {
        $this->utilisateur = new Utilisateur();
        $this->vehicules = new Vehicule();
    }

   
    public function index()
    {
        $utilisateurs = $this->utilisateur->getUtilisateurs();
        $this->genererVue(array('utilisateurs' => $utilisateurs));
    }

    public function login()
    {
        $erreur = $this->requete->getSession()->existeAttribut("erreur") ? $this->requete->getsession()->getAttribut("erreur") : '';
        $this->genererVue(['erreur' => $erreur]);
    }


    /**
     * Fonction pour un utilisateur
     */
    public function utilisateur()
    {
        $id = $id = $this->requete->getParametre("id");
        $utilisateurEntree = $this->utilisateur->getUtilisateur($id);
        $vehicules = $this->utilisateur->getVehiculesUtilisateur($id);
        $this->genererVue(array('utilisateurEntree' => $utilisateurEntree, 'vehicules' => $vehicules));
    }

    
    public function connecter()
    {
        if ($this->requete->existeParametre("login") && $this->requete->existeParametre("mdp"))
        {
            $login = $this->requete->getParametre("login");
            $mdp = $this->requete->getParametre("mdp");
            
            if ($this->utilisateur->connecter($login, $mdp))
            {
                $utilisateur = $this->utilisateur->getUtilisateurLogin($login, $mdp);
                $this->requete->getSession()->setAttribut("utilisateur", $utilisateur);

                if ($this->requete->getSession()->existeAttribut('erreur')) {
                    $this->requete->getsession()->setAttribut('erreur', '');
                }

                $this->rediriger("AdminReparations");
            }
            else
            {
                $this->requete->getSession()->setAttribut('erreur', 'mdp');
                $this->rediriger('Utilisateurs');
            }
        }
        else 
        {
            throw new Exception("Action impossible : login ou mot de passe non défini");
        }
    }

    /*
    public function deconnecter()
    {
        $this->requete->getSession()->detruire();
        $this->rediriger("");
    }*/
}