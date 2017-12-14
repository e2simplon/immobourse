<?php

class ProposeController extends Controller
{
    public function propose() //$cpVilles
    {
        global $offersTypesModel, $transactionsTypesModel, $villesModel, $zonesActivitesModel;

        // envoi des variables à la vue
        $this->set('offersTypesAll', $offersTypesModel->getAll());
        $this->set('transactionsTypesAll', $transactionsTypesModel->getAll());
        $this->set('villesAll', $villesModel->getAll());
        $this->set('villesCP', $villesModel->getCP());
        //$this->set('$villesParCP', $villesModel->getParCP($cpVilles));
        $this->set('zonesActivitesAll', $zonesActivitesModel->getAll());
        
        // affichage de la vue
        $this->displayView('propose');
    }
}

// instance du controlleur
$proposeController = new ProposeController();