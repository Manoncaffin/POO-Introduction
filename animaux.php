<?php

class Animal {
    public function info() {
        echo "Je suis un animal";
    }   
}
class Mammifere extends Animal {
    public function infoPlus() {
        echo "Je suis un mammifère";
    }
}

class Chien extends Mammifere {
    public function crie() {
        echo "J'aboie";
    }
}


$Animal = new Animal();
$Animal->info();
echo "<br>";
$Mammifere = new Mammifere();
$Mammifere->infoPlus();
echo "<br>";
$Chien = new Chien();
$Chien->crie();
echo "<br>";


?>