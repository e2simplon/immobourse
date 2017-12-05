<?php

class Controller {
    
    private $params = array();
    
    protected function set($paramName, $paramValue){

        $this->params[$paramName] = $paramValue;
    }
    
    protected function displayView($viewName) {

        // création de variables dynamiques (niveau 12)
        foreach ($this->params as $varName => $value){
            ${$varName} = $value;
        }
        
        $viewsFolder = "./views";

        include "$viewsFolder/header.php";
        include "$viewsFolder/$viewName.php";
        include "$viewsFolder/footer.php";
    }
}