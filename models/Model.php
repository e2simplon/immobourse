<?php
class Model {

    public function executeQuery($query){
        global $mysqli;
        $result = $mysqli->query($query);
        if (!$result){
            printf("Erreur : %s\n", $mysqli->error);
            exit;
        }
        // plutot que de retourner un curseur, on retourne un tableau qui sera plus facile à manipuler
        $result_arr = array();
        while ($row = $result->fetch_object()){
            $result_arr[] = $row;
        }
        return $result_arr;
    }
}