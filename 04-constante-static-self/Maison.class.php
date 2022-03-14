<?php

class Maison
{
    public static $espaceTerrain = "500m2"; // static veut dire que la propriété appartient à la classe
    public $couleur = "blanc"; // la propriété appartient à l'objet
    private static $nbPiece = 7; // la propriété appartient à la classe
    const Hauteur = '10m'; // constant appartient à la classe et a une valeur qui ne change jamais.
    private $nbPorte = 10; // la propriété appartient à l'objet

    public static function getNbPiece()
    {
        return self::$nbPiece; // self représente la classe à l'interieur de la classe.
    }

    public function getNbPorte()
    {
        return $this->nbPorte;
    }
}

$maison = new Maison;
echo $maison->couleur; // ok - j'appelle une propriété public de mon objet par mon objet
echo "<br>";
$maison->couleur = "bleu";  // ok - j'appelle une propriété public de mon objet par mon objet
echo $maison->couleur;
echo '<br>';
echo Maison::$espaceTerrain; // ok - j'appelle une propriété de ma classe par ma classe
echo $maison->espaceTerrain; // problème - j'appelle une propriété de ma classe par un objet => ça marche pas !!!!!
echo '<br>';
echo $maison->getNbPiece(); // normalement devrais donner une erreur car on l'appelle avec un objet alors que ça apprtient à une classe
// PHP étant assez permissieux il arrive à comprendre et à récupérer la bonne valeur.
echo '<br>';
echo Maison::getNbPiece();
echo '<br>';
//echo Maison::$couleur; // problème - la propriété appartient à l'objet et je l'appelle par une classe.
echo "<br>";
echo $maison->getNbPorte();
// echo Maison::getNbPorte(); problème car la méthode appartient à l'ibjet et je l'appelle avec la classe
echo "<br>";
echo Maison::Hauteur; // ok car la constante apprtient  à la classe et je l'appelle par la classe.
echo "<br>";
// echo $maison->Hauteur; // problème car la constante appartient à la classe et je l'appelle avec un objet !!!! Pas bien !!!
