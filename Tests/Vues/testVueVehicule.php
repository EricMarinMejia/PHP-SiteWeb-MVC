<?php

require_once 'Framework/Vue.php';
$vehicules = [
    [
        'id' => '991',
        'id_utilisateur' => '1',
        'marque' => 'MARQUE TEST1',
        'modele' => 'MODELE TEST1',
        'plaque' => '123 TES',
        'kilometrage' => '9999'
    ],
    [
        'id' => '992',
        'id_utilisateur' => '2',
        'marque' => 'MARQUE TEST2',
        'modele' => 'MODELE TEST2',
        'plaque' => '124 TES',
        'kilometrage' => '9999'
    ]
];
$vue = new Vue('Vehicules/index');
$vue->generer(['vehicules' => $vehicules]);