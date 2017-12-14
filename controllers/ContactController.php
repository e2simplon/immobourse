<?php

class ContactController extends Controller
{

    public function contact()//$offerId
    {
        //global $offersModel;

        // envoi des variables à la vue
        //$this->set('offer', $offersModel->getOne($offerId));

        // chargement de la vue
        $this->displayView('contact');
    }
}

// instance du controlleur
$contactController = new ContactController();