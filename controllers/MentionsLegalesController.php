<?php

class MentionsLegalesController extends Controller
{
    public function mentionsLegales()
    {
        //global $offersModel;
        
        // envoi des variables à la vue
        //$this->set('lastOffers', $offersModel->getLasts());
        
        // affichage de la vue
        $this->displayView('mentionsLegales');
    }
}

// instance du controlleur
$mentionsLegalesController = new MentionsLegalesController();