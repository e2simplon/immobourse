<?php

class OffersController extends Controller
{

    public function listOffers()
    {
        global $offersModel, $affiliatesModel;

        // envoi des variables à la vue
        $this->set('offers', $offersModel->getAll());
        $this->set('affiliates',$affiliatesModel->getAll());

        // chargement de la vue
        $this->displayView('list');
    }


}

// instance du controlleur
$offersController = new OffersController();