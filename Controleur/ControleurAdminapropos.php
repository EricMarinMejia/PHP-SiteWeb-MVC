<?php

require_once 'Controleur/ControleurAdmin.php';

class ControleurAdminapropos extends ControleurAdmin
{
    public function index()
    {
        $this->genererVue();
    }
}
