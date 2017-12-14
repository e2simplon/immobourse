<?php

class Router
{
    public function load()
    {
        // instances (singletons) utilisées
        global $accueilController, $offersController, $inscriptionController, $detailsProsController,
               $proController, $rechercheController, $proposeController, $mapController,
               $contactController, $mentionsLegalesController, $planSiteController, $detailsOffersController
                ;

        // ce routeur très simple regarde la valeur du paramètre GET "page" afin d'appeler le controlleur correspondant
        // $page = 'accueil';
        if (isset($_GET['page'])) {
            $page = $_GET['page'];

            // appel du controlleur qui prend la main sur la suite de l'execution
            switch ($page) {
                case 'accueil':
                    $accueilController->listOffers();
                    break;
                case 'map':
                    $mapController->map();
                    break;
                case 'contact':
                    $contactController->contact();
                    break;
                case 'inscription':
                    $inscriptionController->inscription();
                    break;
                case 'pro':
                    $proController->pro();
                    break;
                case 'recherche':
                    $rechercheController->recherche();
                    break;
                case 'detailAnnonce':
                    // cette méthode a un paramètre "id" obligatoire
                    if (!isset($_GET['idAnnonce'])) {
                        throw new Exception("paramètre 'id' manquant");
                        exit();
                    }
                    $offerId = $_GET['idAnnonce'];
                    $detailsOffersController->detailsOffer($offerId);
                    break;
                case 'propose':
                    $proposeController->propose();
                    break;
                case 'detailPro':
                    $detailsProsController->detailsPro();
                    break;
                case 'mentionsLegales':
                    $mentionsLegalesController->mentionsLegales();
                    break;
                case 'planSite':
                    $planSiteController->planSite();
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
            }
        }
        elseif (isset($_GET['user'])) {

        }
        else {
            $accueilController->accueil();
        }
    }
}

// instance du Router
$router = new Router();