<?php

class Formule1 {
    private $speed=0;


public function drive() {
    echo "Vroum vroum à $this->speed km/h";
}

public function setSpeed($speed) {
   $this->speed += $speed;
}
}

// nouvelle instance
$myFormule1=new Formule1();
// 
$myFormule1->drive();
$myFormule1->setSpeed(10);
$myFormule1->drive();
var_dump($myFormule1);
?>