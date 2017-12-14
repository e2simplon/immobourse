<?php

class DetailsOffersController extends Controller
{

    public function detailsOffer($offerId)
    {
        global $offersModel;
        // envoi des variables à la vue
        $this->set('detailOffer', $offersModel->getOne($offerId));
        // chargement de la vue
        $this->displayView('detailAnnonce');
    }
}

// instance du controlleur
$detailsOffersController = new DetailsOffersController();