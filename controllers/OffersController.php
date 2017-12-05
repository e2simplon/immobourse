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

    public function offer($offerId)
    {
        global $offersModel;

        // envoi des variables à la vue
        $this->set('offer', $offersModel->getOne($offerId));

        // chargement de la vue
        $this->displayView('offer');
    }
}

// instance du controlleur
$offersController = new OffersController();