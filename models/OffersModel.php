<?php

class OffersModel extends Model {

    function getAll(){
        return $this->executeQuery("SELECT * FROM offers");
    }

    function getLasts(){
        return $this->executeQuery("SELECT * FROM offers ORDER BY id DESC LIMIT 5");
    }

    function getOne($offerId){
        $list = $this->executeQuery("SELECT * FROM offers WHERE id = ".$offerId);
        // la fonction précédente retourne une liste, on ne retourne que le premier élément
        if (count($list)==0){
            throw new Exception("Offre non trouvée pour l'id ".$offerId);
        }
        return $list[0];
    }
}

// instance utilisée dans le programme (appelée Singleton)
$offersModel = new OffersModel();