<?php

class OffersTypesModel extends Model {

    function getAll(){
        return $this->executeQuery("SELECT * FROM offers_types");
    }
}

// instance utilisée dans le programme (appelée Singleton)
$offersTypesModel = new OffersTypesModel();