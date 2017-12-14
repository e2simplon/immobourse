<?php

class ZonesActivitesModel extends Model {

    function getAll(){
        return $this->executeQuery("SELECT * FROM zones_activites");
    }
}

// instance utilisée dans le programme (appelée Singleton)
$zonesActivitesModel = new ZonesActivitesModel();