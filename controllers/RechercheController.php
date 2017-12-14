<?php

class RechercheController extends Controller
{
    public function recherche()
    {
        global $offersTypesModel, $transactionsTypesModel, $villesModel, $zonesActivitesModel;
        
        // envoi des variables à la vue
        $this->set('offersTypesAll', $offersTypesModel->getAll());
        $this->set('transactionsTypesAll', $transactionsTypesModel->getAll());
        $this->set('villesAll', $villesModel->getAll());
        $this->set('zonesActivitesAll', $zonesActivitesModel->getAll());
        
        // affichage de la vue
        $this->displayView('recherche');
    }
}

// instance du controlleur
$rechercheController = new RechercheController();