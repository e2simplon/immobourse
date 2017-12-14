<?php

class VillesModel extends Model {

    function getAll(){
        return $this->executeQuery("SELECT * FROM villes ORDER BY codePostal ASC");
    }

    function getCP(){
        return $this->executeQuery("SELECT DISTINCT codePostal FROM villes ORDER BY codePostal ASC");
    }

    function getParCP($cpVilles = 88000){
    $list = $this->executeQuery("SELECT * FROM villes WHERE codePostal = ".$cpVilles);
    // la fonction précédente retourne une liste, on ne retourne que le premier élément
    if (count($list)==0){
        throw new Exception("Ville non trouvée pour le code postal ".$cpVilles);
    }
    return $list[0];
}

}

// instance utilisée dans le programme (appelée Singleton)
$villesModel = new VillesModel();