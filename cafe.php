<?php

class MachineACafe {
    private $marque;
    private $cafe;
    private $enFonction;

    public function __construct($marque) {
        $this->$marque;
    }

    public function allumage() {
        echo "Senseo est en fonction";
    }

    public function faireDuCafe() {
        echo "Je mets une dosette";
    }

    public function mettreUneDosette() {
        echo "Le café est prêt !";
    }
}

$machine = new MachineACafe("Senseo");
$machine->allumage(true);
$machine->mettreUneDosette();
$machine->faireDuCafe();
?>