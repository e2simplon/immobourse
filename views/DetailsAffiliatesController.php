<?php

class DetailsAffiliatesController extends Controller
{

    public function detailsAffiliates($affiliatesId)
    {
        global $AffiliatesModel;
        // envoi des variables à la vue
        $this->set('detailsAffiliates', $affiliatesModel->getOne($affiliatesId));
        // chargement de la vue
        $this->displayView('detailPro');
    }
}

// instance du controlleur
$detailsAffiliatesController = new DetailsAffiliatesController();