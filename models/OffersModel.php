<?php

class OffersModel extends Model
{

    function getAll()
    {
        return $this->executeQuery("SELECT *, offers.id AS idO FROM offers LEFT JOIN villes ON offers.id_ville = villes.id LEFT JOIN zones_activites ON offers.id_zoneActivite = zones_activites.id ORDER BY offers.id DESC");
    }

    function getSelection()
    {
        return $this->executeQuery("SELECT *, offers.id AS idO FROM offers LEFT JOIN villes ON offers.id_ville = villes.id LEFT JOIN zones_activites ON offers.id_zoneActivite = zones_activites.id ORDER BY offers.id DESC LIMIT 20");
    }

    function getOne($offerId)
    {
        $list = $this->executeQuery("SELECT * FROM offers LEFT JOIN villes ON offers.id_ville = villes.id LEFT JOIN zones_activites ON offers.id_zoneActivite = zones_activites.id WHERE offers.id = " . $offerId);
        // la fonction précédente retourne une liste, on ne retourne que le premier élément
        if (count($list) == 0) {
            throw new Exception("Annonce non trouvée pour l'idAnnonce " . $offerId);
        }
        return $list[0];
    }

    function minPrice()
    {

        return $this->executeQuery("SELECT MIN(price) as min_price FROM offers");


    }

    function maxPrice()
    {
        return $this->executeQuery("SELECT MAX(price) as max_price FROM offers");
    }

    function minSurface()
    {
        return $this->executeQuery("SELECT MIN(surface) as min_surface FROM offers");
    }

    function maxSurface(){
        return $this->executeQuery("SELECT MAX(surface) as max_surface FROM offers");
    }
}
// instance utilisée dans le programme (appelée Singleton)
$offersModel = new OffersModel();