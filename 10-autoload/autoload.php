<?php

function inclusionAutomatique($nomDeLaClasse)
{
    include_once($nomDeLaClasse . ".class.php");
    echo "On passe dans l'inclusion automatique ! <br>";
    echo "require($nomDeLaClasse.class.php);<br>";
}


//----------------------------------
spl_autoload_register("inclusionAutomatique");
//----------------------------------

/**
 * spl_autoload_register : permet d'exécuter une fonction lorsque l'interpréteur va passer sur un "new" dans le code.
 * Le nom de la classe après le "new" sera récupéré et transmis à la fonction mise en argument de la fonction spl_autoload_register. 
 */
