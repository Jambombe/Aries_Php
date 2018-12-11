<?php

    interface iFiche
    {
//        private $properties;
//        
//        function getProperties() { return $this->properties; }
//        function setProperties($properties) { $this->properties = $properties; }
//        
//        public function __construct(ArrayObject $prop) {
//            $this->setProperties($prop);
//        }
        
        public function getFiche(): String;
//        {
//            /*
//             * div.fiche
//             *  img
//             *  div.resume
//             *  div.desc 
//             */
//        }
        
        
        public function getResume(): String;
//        {
//            $resume =  '<div id="resume">';
//            
//            foreach ($this->getProperties() as $key => $value) {
//                $resume = $resume . "<b>" . $key . "</b>  : " . $value . "</br>"; 
//            }
//            
//            $resume = $resume . '</div>';
//            
//            return $resume;
//        }


    }

?>