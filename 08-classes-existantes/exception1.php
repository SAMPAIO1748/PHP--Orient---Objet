<?php

// Exception est utilisé dans le cas d'erreur faite par l'utilisateur.

function recherche($tab, $elem)
{

    if (!is_array($tab)) {
        throw new Exception("Vous devez envoyer un tableau"); // Throw permet d'aller dans le bloc catch et d'arrêter l'exécution du code
    }

    if (sizeof($tab) <= 0) {
        throw new Exception("Vous devez envoyer un tableau avec du contenu");
    }


    $position = array_search($elem, $tab);
    return $position;
}

$liste_vide = array();
$listes = array("Apple", "Samsung", "LG", "Sony");

try {
    // try : les essais sur la fonction recherche
    echo recherche($listes, "Apple") . "<br>";
    echo recherche($listes, "Sony") . "<br>";
    //echo recherche($liste_vide, "LG");
    echo recherche($tab, "Samsung");
    //echo "toto";
} catch (Exception $exception) {

    // bloc de capture va capturer les exceptions créées grâce à throw.
    // Une fois qu'on est dans le bloc catch, le code inscrit à l'intérieur de ce bloc s'exécute.
    // Et une fois le code du bloc catch exécuter le traitement du code est stoppé.

    echo "Erreur : " . $exception->getMessage() . "<br>";
    //var_dump($exception);
    // print "<pre>";
    // print_r(get_class_methods($exception));
    // print "</pre>";
}

/******
 * 
 * - Exception est une classe prédéfinie de PHP.
 * - Une exception est une erreur que l'on peut attraper grâce au blocs try et catch.
 * - Throw permet d'arrêter l'exécution du code écrit dans le bloc try et de rentrer dans le bloc catch.
 * - Try et Catch permettent d'avoir 2 blocs d'instructions distincts.
 * 
 ******/
