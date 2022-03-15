<?php
// surcharge ou override : Une redéfinition + une surcharge permet de prendre en compte le comportement de la méthode d'origine et d'y ajouter un traitement complémentaire
class A
{
    public function calcul()
    {
        return 10;
    }
}

class B extends A
{
    public function calcul() // redéfinition de la méthode.
    {

        $nb = parent::calcul(); // surchage
        // parent fonctionne pour appeler une méthode d'une classe parent LORS d'une surcharge
        if ($nb <= 100) {
            return "Resultat inférieur ou égal à 100";
        } else {
            return "Resultat supérieur à 100";
        }
    }

    public function autreCalcul()
    {
        $nb = parent::calcul(); // il est possible d'atteindre une méthode de mon parent, même si il n'y apas de redéfinition + surcharge
        return $nb;
    }
}

$objetB = new B;
echo $objetB->calcul();
echo "<br>";
echo $objetB->autreCalcul();
