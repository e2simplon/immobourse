<?php

class InscriptionController extends Controller
{
    public function inscription()
    {
        //global $offersModel;
        
        // envoi des variables à la vue
        //$this->set('lastOffers', $offersModel->getLasts());
        
        // affichage de la vue
        $this->displayView('inscription');
    }
}

// instance du controlleur
$inscriptionController = new InscriptionController();