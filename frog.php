<?php
require_once "animal.php";
    class frog extends Animal{
        public function __construct($name, $legs = 4, $cold_blood = "no"){
            $this-> name = $name;
            $this-> legs = $legs;
            $this-> cold_blood = $cold_blood;

        }
       public function emon(){

           echo "hop hop";
       }
    }
?>
