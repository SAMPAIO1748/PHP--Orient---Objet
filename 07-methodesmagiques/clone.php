<?php

class Ecole
{
    public $nom = "Doranco";
    public $cp = 93;

    public function __clone()
    {
        // Un clone peut se faire en l'absence de cette méthode.
        // Elle s'exécute en cas de clone demandé et s'applique sur l'objet cloné (et non sur celui qui sert au clonage)
        $this->cp = 92;
    }
}

$ecole1 = new Ecole;
$ecole1->cp = 75;
var_dump($ecole1);
echo "<br>";

$ecole2 = new Ecole;
var_dump($ecole2);
echo "<br>";

$ecole3 = $ecole1; // transmission de la référence [1]
var_dump($ecole3);
echo "<br>";
// lorsque que je modifie $ecole1 cela prend effet sur $ecole3 et vice-versa car ce sont des références qui pointent ver sle même objet #1.
// Ils représentent le même objet, cet objet a maintenant deux noms différents.

$ecole3->cp = 78; // modifie $ecole1 et $ecole3
echo "Ecole 1 : " . $ecole1->cp . "<hr>";
echo "Ecole 3 : " . $ecole3->cp . "<hr>";

$ecole4 = clone $ecole2; // clone crée un objet et récupère les informations de $ecole2 et applique le code de la méthode __clone()
var_dump($ecole4);
echo "<hr>";

echo "Ecole 1 : " . $ecole1->cp . "<br>";
echo "Ecole 2 : " . $ecole2->cp . "<br>";
echo "Ecole 3 : " . $ecole3->cp . "<br>";
echo "Ecole 4 : " . $ecole4->cp . "<br>";
