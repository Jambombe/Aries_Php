<?php

    abstract class Oiseau
    {
        private $race;
        private $desc;
        private $plumage;
        private $type;
        private $styleDeVie;
        private $delaiManger;        
        private $lienImage;
        
        function getRace() { return $this->race; }
        function getDesc() { return $this->desc; }
        function getPlumage() { return $this->plumage; }
        function getType() { return $this->type; }
        function getStyleDeVie() { return $this->styleDeVie; }
        function getDelaiManger() { return $this->delaiManger; }
        function getLienImage() { return $this->lienImage; }
        
        function setRace($race) { $this->race = $race; }
        function setDesc($desc) { $this->desc = $desc; }
        function setPlumage($plumage) { $this->plumage = $plumage; }
        function setType($type) { $this->type = $type; }
        function setStyleDeVie($styleDeVie) { $this->styleDeVie = $styleDeVie; }
        function setDelaiManger($delaiManger) { $this->delaiManger= $delaiManger; }
        function setLienImage($lienImage) { $this->lienImage = $lienImage; }
               
        
        // Si le temps $this->getDelaiManger est dépassé depuis la 1re
        // visite, return true, false sinon
        public function aFaim()
        {
            // ex: $_SESSION[$this->getRace()] -> 'Hibou'
            if (isset($_SESSION[$this->getRace()]))
            {
                if ((time() - $_SESSION[$this->getRace()]) > $this->getDelaiManger())
                {
                    return true;
                }
                else 
                {
                    return false;
                }
            } else {
                return false;
            }
        }
        
        // Nourri l'animal (remet le temps à maintenant pour l'animal)
        public function nourrir()
        {
            $_SESSION[$this->getRace()] = time();
        }


    }
    
?>