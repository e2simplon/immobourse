<?php

class Router
{
    public function load()
    {
        // instances (singletons) utilisées
        global $accueilController, $offersController;

        // ce routeur très simple regarde la valeur du paramètre GET "page" afin d'appeler le controlleur correspondant
        $page = 'accueil';
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
        }

        // appel du controlleur qui prend la main sur la suite de l'execution
        switch ($page) {
            case 'accueil':
                $accueilController->accueil();
                break;
            case 'list':
                $offersController->listOffers();
                break;
            case 'offer':
                // cette méthode a un paramètre "id" obligatoire
                if (!isset($_GET['id'])) {
                    throw new Exception("paramètre 'id' manquant");
                    exit();
                }
                $offerId = $_GET['id'];
                $offersController->offer($offerId);
                break;
            default:
                $accueilController->accueil();
        }
    }
}

// instance du Router
$router = new Router();