<?php

class ProController extends Controller
{
    public function pro()
    {
        //global $offersModel;
        
        // envoi des variables à la vue
        //$this->set('lastOffers', $offersModel->getLasts());
        
        // affichage de la vue
        $this->displayView('pro');
    }
}

// instance du controlleur
$proController = new ProController();