<?php
require './Controleur/Controleur.php';
try {

    if (isset($_GET['action']))
    {
        if ($_GET['action'] == 'reparation')
        {
            if (isset($_GET['id']))
            {
                // intval renvoie la valeur numérique du paramètre ou 0 en cas d'échec 
                $id = intval($_GET['id']);
                if ($id !=  0)
                {
                    reparation($id);
                }
                else
                {
                    throw new Exception("Identifiant de réparation incorrect.");
                }
            }
            else
            {
                throw new Exception("Aucun identifiant de réparation fourni.");
            }
        }
        else if ($_GET['action'] == 'nouvelleReparation')
        {
            if (isset($_POST['id_vehicule']))
            {
                $id = intval($_POST['id_vehicule']);
                if ($id != 0)
                {
                    $vehicule = getVehicule($id);
                    $reparation = $_POST;
        
                    $date_debut = strtotime($reparation['date_reparation_debut']);
                    $date_fin = strtotime($reparation['date_reparation_fin']);
        
                    if (date("Y-m-d", $date_debut) <= date("Y-m-d", $date_fin))
                    {
                        nouvelleReparation($reparation);
                    }
                    else
                    {
                        throw new Exception("Date de fin avant date de debut");
                    }
                }
                else
                {
                    throw new Exception("Identifiant du véhicule incorrect");
                }
            } else {
                throw new Exception("Aucun identifiant de véhicule");
            }
        }
        else if ($_GET['action'] == 'confirmerReparation')
        {
            if (isset($_GET['id']))
            {
                // intval renvoie la valeur numérique du paramètre ou 0 en cas d'échec
                $id = intval($_GET['id']);
                if ($id != 0)
                {
                    confirmerReparation($id);
                }
                else
                {
                    throw new Exception("Identifiant de réparation incorrect");
                }
            }
            else
            {
                throw new Exception("Aucun identifiant de réparation");
            }
        }
        else if ($_GET['action'] == 'supprimerReparation')
        {
            if (isset($_POST['id']))
            {
                // intval renvoie la valeur numérique du paramètre ou 0 en cas d'échec
                $id = intval($_POST['id']);
                if ($id != 0)
                {
                    supprimerReparation($id);
                }
                else
                {
                    throw new Exception("Identifiant de réparation incorrect");
                }
            }
            else
            {
                throw new Exception("Aucun identifiant de réparation");
            }
        }
        else if ($_GET['action'] == 'vehicules')
        {
            vehicules();
        }
        else if ($_GET['action'] == 'vehicule')
        {
            if (isset($_GET['id']))
            {
                // intval renvoie la valeur numérique du paramètre ou 0 en cas d'échec
                $id = intval($_GET['id']);
                if ($id !=  0)
                {
                    vehicule($id);
                }
                else
                {
                    throw new Exception("Identifiant de véhicule incorrect.");
                }
        
            }
            else
            {
                throw new Exception("Aucun identifiant de véhicule fourni.");
            }    
        }
        else if ($_GET['action'] == 'nouveauVehicule')
        {
            if (isset($_POST['id_utilisateur']))
            {
                $id = intval($_POST['id_utilisateur']);
                if ($id != 0)
                {
                    $vehicule = $_POST;
                    nouveauVehicule($vehicule);
                }
                else
                {
                    throw new Exception("Identifiant de l'utilisateur incorrect");
                }
            } else {
                throw new Exception("Aucun identifiant de utilisateur");
            }
        }
        else if ($_GET['action'] == 'utilisateurs')
        {
            utilisateurs();
        }
        else if ($_GET['action'] == 'utilisateur')
        {
            if (isset($_GET['id']))
            {
                // intval renvoie la valeur numérique du paramètre ou 0 en cas d'échec
                $id = intval($_GET['id']);
                if ($id !=  0)
                {
                    utilisateur($id);
                }
                else
                {
                    throw new Exception("Identifiant d'utilisateur incorrect.");
                }
        
            }
            else
            {
                throw new Exception("Aucun identifiant d'utilisateur fourni.");
            }
        }
        else
        {
            throw new Exception('Action non valide');
        }
    }
    else
    {
        accueil();
    }
    
} catch (Exception $e) {
    $msgErreur = $e->getMessage();
    erreur($msgErreur);
}