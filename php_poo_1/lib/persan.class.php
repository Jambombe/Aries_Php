<?php

    require_once('chat.class.php');
    
    class Persan extends Chat{
        
        const RACE = 'Persan';
        const DESC = 'Un chat tout poilu';
        const POIDS = '3 - 6kg';
        const PELAGE = 'Long';
        
//        private $properties = array();
        
        public function __construct()
        {
            self::init(); // Ou $this->init();
        }
        
        private function init()
        {
            $this->setRace(self::RACE);
            parent::setDesc(self::DESC);
            parent::setPoids(self::POIDS);
            parent::setPelage(self::PELAGE);
        }
        
//        public function getInfosPersan()
        public function getInfosPersan(): ArrayObject // Type de retour
        {
//            $properties = array(
//                'Race' => parent::getRace(),
//                'Poids' => parent::getPoids(),
//                'Pelage' => parent::getPelage(),
//                'Desc' => parent::getDesc()
//            );
            
            $properties = new stdClass(); // Sinon lève un Warning
            $properties->Race =  parent::getRace();
            $properties->Poids = parent::getPoids();
            $properties->Pelage = parent::getPelage();
            $properties->Desc = parent::getDesc();
            
            $chatPersan = new ArrayObject($properties);
            
            return $chatPersan;
        }
        
        public function afficherInfos()
        {
            echo
                'Race : ' . parent::getRace() . '</br>' . 
                'Desc : ' . $this->getDesc() .  '</br>' . 
                'Poids : ' . parent::getPoids() .  '</br>' . 
                'Pelage : ' . parent::getPelage() . '</br>' ;
        }
        
        
        
    }

    
    
    
    
    
    
    
    
    
    
?>