<?php

require_once 'Vue/Vue.php';
$reparations = [
    [
        'id' => '991',
        'id_vehicule' => '1',
        'date_reparation_debut' => '2023-12-01',
        'date_reparation_fin' => '2023-12-02',
        'description_reparations' => 'TEST1',
        'montant_paye' => '999',
        'mechanicien' => 'texte TEST'
    ],
    [
        'id' => '992',
        'id_vehicule' => '2',
        'date_reparation_debut' => '2023-10-01',
        'date_reparation_fin' => '2023-10-02',
        'description_reparations' => 'TEST2',
        'montant_paye' => '998',
        'mechanicien' => 'texte TEST2'
    ]
];
$vue = new Vue('Reparations');
$vue->generer(['reparations' => $reparations]);
