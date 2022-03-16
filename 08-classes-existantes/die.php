<?php

function recherche($tab, $elem)
{

    if (!is_array($tab)) {
        die('VOUS DEVEZ ENVOYER UN TABLEAU PAR JUPITER !!!!!!'); // on arrête le traitement du code par l'interpréteur.
    }

    $position = array_search($elem, $tab);
    return $position;
}

$liste = [
    'Audi',
    'BMW',
    'Mercedes-Benz'
];

$liste2 = [
    'Batman',
    'Superman',
    'Wonder Woman'
];

echo recherche($liste, "Audi") . "<hr>";
echo recherche($liste, "BMW") . "<hr>";
echo recherche($liste2, "Wonder Woman") . "<hr>";
echo recherche('toto', 'Roger'); // comme "toto" n'est pas un tableau on entre dans le if de la méthode et donc on applique le die().
echo "Bonjour Roger !! ";
echo "Au revoir Valéry";

/***
 * 
 * Lorsque que l'interpreteur lit le code PHP et qu'il tombe sur die(), il stoppe le traitement du code.
 * C'est comme un feu rouge pour lui.
 * Tout le code qui est après le die ne sera jamais appliqué, traité, il ne s'affichera pas !!!
 * 
 ***/
