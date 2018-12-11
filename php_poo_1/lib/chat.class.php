<?php


    abstract class Chat
    {
        private $race;
        private $desc;
        private $poids;
        private $pelage;        
        
        function __construct() {
            
        }
        
        protected function getRace() { return $this->race; }
        protected function getDesc() { return $this->desc; }
        protected function getPoids() { return $this->poids; }
        protected function getPelage() { return $this->pelage; }
        
        protected function setRace($race) { $this->race = $race; }
        protected function setDesc($desc) { $this->desc = $desc; }
        protected function setPoids($poids) { $this->poids = $poids; }
        protected function setPelage($pelage) { $this->pelage = $pelage; }
    
        
    }








?>