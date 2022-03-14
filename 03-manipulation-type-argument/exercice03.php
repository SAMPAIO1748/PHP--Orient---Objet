<?php

/**
 * Schéma des classes (UML) :
 * 
 * -------------------------
 * Vehicule
 * -------------------------
 * setlitresEssence()
 * getlitresEssence()
 * -------------------------
 * 
 * 
 * 
 * -------------------------
 * Pompe
 * -------------------------
 * setlitresEssence()
 * getlitresEssence()
 * donnerEssence()
 * 
 * 
 * Consigne :
 * 1. Création d'un véhicule 1
 * 2. Attribuer un nombre de litre d'essence au véhicule 1 : 5
 * 3. Afficher le nombre de litres d'essence du véhicule 1
 * 4. Création d'une pompe
 * 5. Attribuer un nombre de litres d'essence à la pompe : 800
 * 6. Afficher le nombre de litres d'essence de la pompe.
 * 7. La pompe donne de l'essence en faisant le plein (50L) au véhicule 1
 * 8. Afficher le nombre de litres restant d'essence de la pompe
 * 9. Affcher le nombre de litres d'essence du véhicule 1
 * 10. Faire en sorte que la véhicule ne puisse pas contenir plus de 50L d'essence (limite du réservoir)
 * 
 * Quand vous avez fini mettre fini dans le chat.
 */

class Vehicule
{
    private $litresEssence;

    public function getlitresEssence()
    {
        return $this->litresEssence;
    }

    public function setlitresEssence($litres)
    {
        if (is_int($litres) && $litres <= 50) {
            $this->litresEssence = $litres;
        }
    }
}

class Pompe
{
    private $litresEssence;

    public function getlitresEssence()
    {
        return $this->litresEssence;
    }

    public function setlitresEssence($litres)
    {
        if (is_int($litres)) {
            $this->litresEssence = $litres;
        }
    }

    public function donnerEssence(Vehicule $v) // on exige un argument de type Vehicule 
    {
        //                             800                - (50 - 5) = 755
        $this->setlitresEssence($this->getlitresEssence() - (50 - $v->getlitresEssence()));

        $v->setlitresEssence(50);
    }
}

$vehicule1 = new Vehicule;
$vehicule1->setlitresEssence(5);
echo "Le vehicule 1 a " . $vehicule1->getlitresEssence() . ' litres d\'essence';
echo '<br>';
$pompe = new Pompe;
$pompe->setlitresEssence(800);
echo "La pompe a " . $pompe->getlitresEssence() . " litres d'essence";

$pompe->donnerEssence($vehicule1);
echo '<br>';
echo "Après ravitallement, la pompe a " . $pompe->getlitresEssence() . " litres d'essence";

echo "<br>Le vehicule 1 a, après ravitaillement, " . $vehicule1->getlitresEssence() . ' litres d\'essence';
