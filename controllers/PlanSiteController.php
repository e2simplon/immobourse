<?php

class PlanSiteController extends Controller
{
    public function planSite()
    {
        //global $offersModel;
        
        // envoi des variables à la vue
        //$this->set('lastOffers', $offersModel->getLasts());
        
        // affichage de la vue
        $this->displayView('planSite');
    }
}

// instance du controlleur
$planSiteController = new PlanSiteController();