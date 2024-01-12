<?php
// paramètres
class MachineACafe
{
    private $marque;

    private $cafe;

    private $enFonction;

    private $prix = 1;

    // ici les deux $marque -> propriété et non paramètre que l'on remet dans l'instance
    public function __construct($marque)
    {
        $this->marque = $marque;
    }

    public function allumage($etat)
    {
        $this->enFonction = $etat;

        if ($this->enFonction) {
            echo "$this->marque est allumée.";
        } else {
            echo "$this->marque est éteinte.";
        }
    }

    // OU 
    // public function allumage($etat) {
    //     $this->enFonction = $etat;

    //     if ($this->enFonction === true) {
    //     echo $this->marque . " est allumée.";
    // } else {
    //     echo $this->marque . " est éteinte.";
    // }
    // }


    public function mettreUneDosette()
    {
        if ($this->enFonction) {
            echo " Je mets la dosette.";
        }
    }

    // OU 
    // public function mettreUneDosette() {
    //     if ($this->enFonction) {
    //         $this->cage = true,
    //         echo " Je mets la dosette.";
    //     } else {
    //         "Votre machine est éteinte je ne peux pas mettre de dosette";
    //     }
    // }


    public function mettreDuSucre($sucre)
    {
        if ($this->enFonction === true) {
            if ($sucre > 0) {
                echo " Avec $sucre sucre.";
            } else {
                echo " $sucre sucre.";
            }
        }
    }

    public function mettreMonnaie()
    {
        if ($this->enFonction === true) {
            echo "Café à 1 euros";
        } else {
        }
    }

    // OU
    // public function mettreMonnaie($argent)
    // {
    //     if ($this->enFonction) {
    //         if($argent >= $this->prix) {
    //                 $monnaie = $argent - $this->prix;
    //         echo "Vous avez payé $argent, la machine vous rend " . $monnaie . "</p>";
    //     } else {
    //         $monnaie = $this->prix - $argent;
    //         echo "Vous n'avez pas mis assez d'argent, il vous reste " .$monnaie . "à mettre.";
    //     }
    //     }
    // }

    // et ajouter dans instance :
    // $reste = $machine -> mettreMonnaie(argent:2);
    // if ($reste > ) {
    //     $machine->faireDuCafe();
    // }

    public function faireUnCafe()
    {
        if ($this->enFonction) {
            echo " Je fais couler un café.";
        }
    }
}


// instance d'un nouvel objet 
$machine = new MachineACafe("Senseo");
$machine->allumage(true);
$machine->mettreUneDosette();
$machine->faireUnCafe();
$machine->mettreDuSucre(0);
$machine->mettreMonnaie();

var_dump($machine);
