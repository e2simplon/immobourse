<?php
class MetaManager
{
    private $_Title;
    private $_Keywords;
    private $_Description;

    public function __construct($Title = "Titre par defaut",$Keywords = "Mots clés par defaut",$Description = "Description par defaut") {
        $this->setTitle($Title);
        $this->setKeywords($Keywords);
        $this->setDescription($Description);
    }

    function setTitle($title)
    {
        $this->_Title = $title;
    }

    public function getTitle()
    {
        return $this->_Title;
    }

    function setKeywords($keywords)
    {
        $this->_Keywords = $keywords;
    }

    public function getKeywords()
    {
        return $this->_Keywords;
    }

    function setDescription($description)
    {
        $this->_Description = $description;
    }

    public function getDescription()
    {
        return $this->_Description;
    }
}

// $MetaData = new MetaManager(PageTitle,PageKeywords,PageDescription);