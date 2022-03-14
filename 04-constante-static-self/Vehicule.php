<?php

class Vehicule
{
    private static $marque = "BMW";
    private $couleur = "noir";

    public function getMarque() // la méthode n'est pas static donc elle apprtient à l'objet mais elle retourne une propriété qui appartient à la classe
    {
        return self::$marque; // propriété static donc apprtient à la classe.
    }

    public function setMarque($reponse)
    {
        self::$marque = $reponse; // propriété static donc apprtient à la classe.
    }

    public function getCouleur()
    {
        return $this->couleur;
    }

    public function setCouleur($reponse)
    {
        $this->couleur = $reponse;
    }
}

$vehicule1 = new Vehicule;
echo "Véhicule 1 de marque " . $vehicule1->getMarque() . " et de couleur " . $vehicule1->getCouleur() . '<hr>';

$vehicule2 = new Vehicule;
echo "Véhicule 2 de marque " . $vehicule2->getMarque() . " et de couleur " . $vehicule2->getCouleur() . '<hr>';

$vehicule3 = new Vehicule;
$vehicule3->setCouleur('rouge');
echo "Véhicule 3 de marque " . $vehicule3->getMarque() . " et de couleur " . $vehicule3->getCouleur() . '<hr>';

$vehicule4 = new Vehicule;
echo "Véhicule 4 de marque " . $vehicule4->getMarque() . " et de couleur " . $vehicule4->getCouleur() . '<hr>';

$vehicule5 = new Vehicule;
$vehicule5->setMarque('Audi'); // modifie une propriété de la classe et donc ce changement se verra sur tous les futurs objets émanants de la classe
echo "Véhicule 5 de marque " . $vehicule5->getMarque() . " et de couleur " . $vehicule5->getCouleur() . '<hr>';

$vehicule6 = new Vehicule;
echo "Véhicule 6 de marque " . $vehicule6->getMarque() . " et de couleur " . $vehicule6->getCouleur() . '<hr>';
