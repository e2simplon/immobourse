<?php

class AccueilController extends Controller
{
    public function accueil()
    {
        global $offersModel;
        
        // envoi des variables à la vue
        $this->set('lastOffers', $offersModel->getLasts());
        
        // affichage de la vue
        $this->displayView('accueil');
    }
}

// instance du controlleur
$accueilController = new AccueilController();