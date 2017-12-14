<?php

class DetailsProsController extends Controller
{

    public function detailsPro()
    {
        // envoi des variables à la vue


        // chargement de la vue
        $this->displayView('detailPro');
    }
}

// instance du controlleur
$detailsProsController = new DetailsProsController();