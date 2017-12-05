<?php

class AffiliatesModel extends Model {

    public function getAll(){
        return $this->executeQuery("SELECT * FROM affilates");
    }
}

// instance utilisée dans le programme (appelée Singleton)
$affiliatesModel = new AffiliatesModel();