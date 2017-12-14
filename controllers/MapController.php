<?php

class MapController extends Controller
{
    public function map()
    {
        //global $offersModel;

        // envoi des variables à la vue
        //$this->set('lastOffers', $offersModel->getLasts());

        // affichage de la vue
        $this->displayView('map');
    }
}

// instance du controlleur
$mapController = new MapController();