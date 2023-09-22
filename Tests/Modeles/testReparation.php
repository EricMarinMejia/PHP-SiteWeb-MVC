<?php

require_once 'Modele/Reparation.php';

$tstReparation = new Reparation();

$reparations = $tstReparation->getReparations();
echo '<h3>Test getReparations : </h3>';
var_dump($reparations->rowCount());

echo '<h3>Test getReparation : </h3>';
$reparation = $tstReparation->getReparation(1);
var_dump($reparation);