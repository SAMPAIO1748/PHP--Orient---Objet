<?php

// Exemple StdClass : 
$tab = array("orange", "pomme", "fraise");
$objet = (object) $tab; // Transformation du tableau en objet
var_dump($objet);
echo "<br>";


$objet2 = new StdClass();
var_dump($objet2);
echo "<br>";
$objet2->titre = "PHPOO";
echo $objet2->titre . "<br>";
var_dump($objet2);

// Un objet fait partie de la classe STDCLASS (classe standard de PHP) lorsque celui-ci est orphelin 
// et n'a pas été instancié par un new "MaClasse"
// comme c'est le cas de l'objet $objet.
// Mais on peut aussi instancié un objet à partir de cette classe
// comme avec l'objet $objet2
