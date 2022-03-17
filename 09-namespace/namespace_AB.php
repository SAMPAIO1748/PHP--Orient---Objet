<?php

namespace A { // on peut remplacer le ; par des {}
    // il vaut mieux privilégier le ;

    function pays()
    {
        return "France";
    }

    function ville()
    {
        return "Paris";
    }
}

namespace B {

    function pays()
    {
        return "Belgique";
    }

    function ville()
    {
        return "Bruxelles";
    }
}

//echo B\ville();
// Erreur fatal, on ne peut pas mettre du code après avoir définis des namespaces.
// il faut donc créer des fichier d'appel.
