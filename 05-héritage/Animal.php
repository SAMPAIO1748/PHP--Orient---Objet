<?php

class Animal
{
    protected function deplacement()
    {
        return "Je me déplace";
    }

    public function manger()
    {
        return "Je mange chaque jour";
    }
}

// exercie : créer deux classes : Elephant et Chat qui héritent de Animal
// chaque classe aura la méthode quiSuisJe()
// la classe chat aura la méthode manger (qui retoutrne je mange comme un chat).
