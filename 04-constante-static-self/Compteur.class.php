<?php

class Compteur
{
    public static $nbInstanceClass = 0; // propriété qui appartient à la classe
    public $nbInstanceObjet = 0; // propriété qui appartient à l'objet.
    public function __construct()
    {
        ++self::$nbInstanceClass;
        ++$this->nbInstanceObjet;
    }
}

$c1 = new Compteur;
$c2 = new Compteur;
$c3 = new Compteur;
$c4 = new Compteur;
$c5 = new Compteur;


echo 'Nombre de fois que la classe a été instancié ' . Compteur::$nbInstanceClass . '<hr>';
echo 'Nombre de fois que l\'objet a été instancié ' . $c5->nbInstanceObjet . '<hr>';
