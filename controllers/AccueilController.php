<?php

class AccueilController extends Controller
{
    public function accueil()
    {
        global $offersModel, $affiliatesModel, $offersTypesModel, $transactionsTypesModel;
        
        // envoi des variables à la vue
        $this->set('offersTypesAll', $offersTypesModel->getAll());
        $this->set('transactionsTypesAll', $transactionsTypesModel->getAll());
        $this->set('offers', $offersModel->getSelection());
        $this->set('affiliates',$affiliatesModel->getAll());
        //$this->set('minPrice', $offersModel->minPrice());
        $this->set('minPrice', $offersModel->minPrice());
        $this->set('maxPrice', $offersModel->maxPrice());
        $this->set('minSurface', $offersModel->minSurface());
        $this->set('maxSurface', $offersModel->maxSurface());
        $this->MetaDataHeader->setTitle('Trouloulou');
        
        // affichage de la vue
        $this->displayView('accueil');
    }
}

// instance du controlleur
$accueilController = new AccueilController();