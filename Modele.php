<?php

/**
 * Connexion vers la BDD. 
 */
function getBdd() {
    $bdd = new PDO('mysql:host=localhost;dbname=reparations_automobiles_v0_0_1;charset=utf8', 'root', 'mysql', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    return $bdd;
}


/**
 * Renvoie toutes les réparations.
 */
function getReparations() {
    $bdd = getBdd();
    $reparations = $bdd->query('select * from reparations' . ' order by date_reparation_debut desc, ID desc');
    return $reparations;
}


/**
 * Renvoie une réparation spécifique
 */
function getReparation($id) {
    $bdd = getBdd();
    $reparation = $bdd->prepare('select * from reparations'
                . ' where ID=?');
    $reparation->execute(array($id));

    if ($reparation->rowCount() == 1) {
        return $reparation->fetch();
    } else {
        throw new Exception("Aucune réparation ne correspond à l'identifiant '$id'");
    }
}


/**
 * Renvoie tous les véhicules
 */
function getVehicules() {
    $bdd = getBdd();
    $vehicules = $bdd->query('select * from vehicules' . ' order by id desc');
    return $vehicules;
}


/**
 * Renvoie un véhicule spécifique
 */
function getVehicule($id) {
    $bdd = getBdd();
    $vehicule = $bdd->prepare('select * from vehicules'
            . ' where id = ?');
    $vehicule->execute(array($id));

    if ($vehicule->rowCount() == 1) {
        return $vehicule->fetch();
    } else {
        throw new Exception("Aucun véhicule ne correspond à l'identifiant '$id'");
    }
}


/**
 * Renvoie tous les utilisateurs
 */
function getUtilisateurs() {
    $bdd = getBdd();
    $utilisateurs = $bdd->query('select * from utilisateurs' . ' order by nom asc, prenom asc, id desc');
    return $utilisateurs;
}


/**
 * Renvoie un utilisateur véhicule
 */
function getUtilisateur($id) {
    $bdd = getBdd();
    $utilisateur = $bdd->prepare('select * from utilisateurs'
            . ' where id = ?');
    $utilisateur->execute(array($id));

    if ($utilisateur->rowCount() == 1) {
        return $utilisateur->fetch();
    } else {
        throw new Exception("Aucun utilisateur ne correspond à l'identifiant '$id'");
    }
}


//FONCTIONS CROSS TABLE

/**
 * Renvoie les vehicules d'un utilisateur
 */
function getVehiculesUtilisateur($id) {
    $bdd = getBdd();
    $vehicules = $bdd->prepare('select * from vehicules'
            . ' where id_utilisateur = ?');
    $vehicules->execute(array($id));

    if ($vehicules->rowCount() >= 0) {
        $data = $vehicules->fetchAll(\PDO::FETCH_ASSOC);
        return $data;     
    } else {
        throw new Exception("Aucun vehicule ne correspond à l'identifiant '$id'");
    }
}


/**
 * Renvoie les réparations d'un véhicule
 */
function getReparationsVehicule($id) {
    $bdd = getBdd();
    $reparations = $bdd->prepare('select * from reparations'
            . ' where id_vehicule = ?');
    $reparations->execute(array($id));

    if ($reparations->rowCount() >= 0) {
        $data = $reparations->fetchAll(\PDO::FETCH_ASSOC);
        return $data;     
    }
}


//FONCTIONS POST
/**
 * Post une réparation
 */
function setReparation($reparation) {
    $bdd = getBdd();
    $reparations = $bdd->prepare('INSERT INTO reparations (id_vehicule, date_reparation_debut, date_reparation_fin, description_reparations, montant_paye, mechanicien) VALUES(?, ?, ?, ?, ?, ?)');
    $reparations->execute(array($reparation['id_vehicule'], $reparation['date_reparation_debut'], $reparation['date_reparation_fin'], $reparation['description_reparations'], $reparation['montant_paye'], $reparation['mechanicien']));
    return $reparations;
}