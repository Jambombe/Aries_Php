<?php

require_once 'iFiche.php';

class FicheOiseau implements iFiche{
    
    private $oiseau; // Objet de la classe Oiseau
    private $properties; // Objet ArrayObject, contenant toutes les propriétés de $oiseau
    
    /**
     * @param Oiseau $o : Référence d'une instance Oiseau
     * @param ArrayObject $prop : propriétés de l'Oiseau $o
     */
    public function __construct(Oiseau &$o, ArrayObject $prop) {
        $this->setOiseau($o);
        $this->setProperties($prop);
    }


    public function getFiche(): String {
        
        $str = '
            <div class="fiche">
            <img src="'. $this->oiseau->getLienImage() . '">';

            if ($this->oiseau->aFaim())
            {
                $str = $str .  '<div class="manger">';
                $str = $str .   "J'ai faim :((( </br>";
                $str = $str .   '<a href="FicheHibou.php?manger=1"><i class="fas fa-utensils"></i> Nourrir</a>';
                $str = $str .   '</div>';
            }
//            

        $str = $str .   '<div class="resume">';
        $str = $str .   $this->getResume();
        $str = $str .   '</div></div>';
        
        return $str;
    }

    public function getResume(): String {
        
        $str = '<div class="resume">';
        $str = $str . '<b> Race : </b>' . $this->getProperties()["Race"] . "</br>";
        $str = $str . '<b> Type : </b>' . $this->getProperties()["Type"]. "</br>";
        $str = $str . '<b> Plumage : </b>' . $this->getProperties()["Plumage"]. "</br>";
        $str = $str . '<b> Style de vie : </b>' . $this->getProperties()["StyleDeVie"]. "</br>";
        $str = $str . '</div>';
                
        return $str;
    }
    
    
    public function getOiseau() { return $this->oiseau; }
    public function getProperties() { return $this->properties; }
    private function setOiseau($oiseau) { $this->oiseau = $oiseau; }
    private function setProperties($prop) { $this->properties = $prop; }

}
