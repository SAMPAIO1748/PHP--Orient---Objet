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
