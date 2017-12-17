<?php

class Controller {

    private $params = array();
    protected $MetaDataHeader;

    public function __construct(){
        $this->MetaDataHeader = new MetaManager(PageTitle,PageKeywords,PageDescription);
    }

    
    protected function set($paramName, $paramValue){

        $this->params[$paramName] = $paramValue;
    }
    
    protected function displayView($viewName) {
      //  global $MetaData;
        //if (isset($params)) {
            // création de variables dynamiques (niveau 12)
            foreach ($this->params as $varName => $value) {
                ${$varName} = $value;
            }
            $pageTitle = $this->MetaDataHeader->getTitle();
            $pageDescription = $this->MetaDataHeader->getDescription();
            $pageKeywords = $this->MetaDataHeader->getKeywords();
        //}

        $viewsFolder = "./views";

        include "$viewsFolder/header.php";
        include "$viewsFolder/$viewName.php";
        include "$viewsFolder/footer.php";
    }
}