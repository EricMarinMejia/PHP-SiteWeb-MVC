<?php

require_once 'Modele/Vehicule.php';

$tstVehicule = new Vehicule();

$vehicules = $tstVehicule->getVehicules();
echo '<h3>Test getVehicules : </h3>';
var_dump($vehicules->rowCount());

echo '<h3>Test getVehicule : </h3>';
$vehicule = $tstVehicule->getVehicule(1);
var_dump($vehicule);