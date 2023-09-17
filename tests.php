<?php

if (isset($_GET['test']))
{
    if ($_GET['test'] == 'modeleReparation')
    {
        require 'Tests/Modeles/testReparation.php';
    }
    else if ($_GET['test'] == 'modeleVehicule')
    {
        require 'Tests/Modeles/testVehicule.php';
    }
    else if ($_GET['test'] == 'vueReparation')
    {
        require 'Tests/Vues/testVueReparation.php';
    }
    else if ($_GET['test'] == 'vueVehicule')
    {
        require 'Tests/Vues/testVueVehicule.php';
    }
}
?>

<h3>Tests des Modèles</h3>
<ul>
    <li>
        <a href="tests.php?test=modeleReparation">Reparation</a>
    </li>
    <li>
        <a href="tests.php?test=modeleVehicule">Vehicule</a>
    </li>
</ul>

<h3>Test des Vues</h3>
<ul>
    <li>
        <a href="tests.php?test=vueReparation">Reparation</a>
    </li>
    <li>
        <a href="tests.php?test=vueVehicule">Vehicule</a>
    </li>
</ul>
