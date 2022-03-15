<?php

class A
{
    public function direBonjour()
    {
        return 'Bonjour';
    }
}

class B // la classe B n'hérite pas de la classe A
{
    public $mavariable;

    public function __construct()
    {
        $this->mavariable = new A; // je crée un objet A que je place dans la propriété $mavariable de mon objet B
    }

    public function uneMéthode()
    {
        return $this->mavariable->direBonjour();
        //       B  ->      A   ->direBonjour()
        // habituellement nous mettons qu'uns seule flèche mais ici mavariable contient un objet donc une autre flèche est possible.
    }
}

$b = new B;
echo $b->mavariable->direBonjour();
echo "<br>";
echo $b->uneMéthode();
echo "<br>";
var_dump($b);

// On a remplacé l'héritage de classe par l'utilisation d'un objet dans un autre objet.
