<?php

    require_once 'oiseau.class.php';

    class Hibou extends Oiseau
    {
        const RACE = "Hibou";
        const DESC = "Un oiseau nocturne avec de gros yeux";
        const PLUMAGE = "Moelleux";
        const TYPE = "Rapace";
        const STYLE_DE_VIE = "Nocturne";
        
        const LIEN_IMAGE = "https://jardinage.lemonde.fr/images/dossiers/2017-09/petit-duc-112352.jpg";
        
        const DELAI_MANGER = 30;

        
        public function __construct()
        {
            self::init();
        }
        
        private function init()
        {
            $this->setRace(self::RACE);
            $this->setDesc(self::DESC);
            $this->setPlumage(self::PLUMAGE);
            $this->setType(self::TYPE);
            $this->setStyleDeVie(self::STYLE_DE_VIE);
            $this->setDelaiManger(self::DELAI_MANGER);
            $this->setLienImage(self::LIEN_IMAGE);
        }
        
        public function getHibou(): ArrayObject
        {
            $properties = new stdClass();
            
            $properties->Race = parent::getRace();
            $properties->Plumage = parent::getPlumage();
            $properties->Type = parent::getType();
            $properties->StyleDeVie = parent::getStyleDeVie();
            $properties->Desc = parent::getDesc();
            
            $properties->LienImage = parent::getLienImage();
            
            $hibouProperties = new ArrayObject($properties);
            
            return $hibouProperties;
        }
        
        
        
    }

?>