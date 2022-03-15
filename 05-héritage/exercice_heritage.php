<?php

// Créer les classes en fonction des éléments suivants :

/*********************
 * 
 * 
 * -------------------
 * Voiture
 * -------------------
 * $moteur
 * $portes
 * -------------------
 * jeRoule()
 * -------------------
 * 
 * 
 * -------------------
 * Audi
 * -------------------
 * $couleur
 * $annee
 * $modele
 * 
 * __construct($moteur, $portes, $couleur, $annee, $modele)
 * getter et setter des propriétés
 * 
 * -------------------
 * BMW
 * -------------------
 * $couleur
 * $annee
 * $modele
 * 
 * __construct($moteur, $portes, $couleur, $annee, $modele)
 * getter et setter des propriétés
 * 
 * -------------------
 * Mercedes-Benz
 * -------------------
 * $couleur
 * $annee
 * $modele
 * 
 * __construct($moteur, $portes, $couleur, $annee, $modele)
 * getter et setter des propriétés
 * 
 */

// Audi, BMW et Mercedez-benz héritent de Voiture

/***
 * 
1. Créer 3 audi
2. Afficher la couleur des 3 audis
3. Afficher le modèle des 3 audis
4.  Afficher l'année des 3 audis
5. Afficher le moteur des 3 audis
6. Afficher les portes des 3 audis
7. Faire de même pour 3 bmw et 3 mercedes-benz
 */

class Voiture
{
    protected $moteur;
    protected $portes;

    public function jeRoule()
    {
        return "Je roule";
    }

    public function getMoteur()
    {
        return $this->moteur;
    }

    public function setMoteur($moteur)
    {
        $this->moteur = $moteur;
    }

    public function getPortes()
    {
        return $this->portes;
    }

    public function setPortes($portes)
    {
        $this->portes = $portes;
    }
}

class Audi extends Voiture
{

    private $couleur;
    private $modele;
    private $annee;

    public function __construct($moteur, $portes, $couleur, $modele, $annee)
    {
        $this->moteur = $moteur;
        $this->portes = $portes;
        $this->couleur = $couleur;
        $this->modele = $modele;
        $this->annee = $annee;
    }

    public function getCouleur()
    {
        return $this->couleur;
    }

    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;
    }

    public function getModele()
    {
        return $this->modele;
    }

    public function setModele($modele)
    {
        $this->modele = $modele;
    }

    public function getAnnee()
    {
        return $this->annee;
    }

    public function setAnnee($annee)
    {
        $this->annee = $annee;
    }
}

class BMW extends Voiture
{

    private $couleur;
    private $modele;
    private $annee;

    public function __construct($moteur, $portes, $couleur, $modele, $annee)
    {
        $this->moteur = $moteur;
        $this->portes = $portes;
        $this->couleur = $couleur;
        $this->modele = $modele;
        $this->annee = $annee;
    }

    public function getCouleur()
    {
        return $this->couleur;
    }

    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;
    }

    public function getModele()
    {
        return $this->modele;
    }

    public function setModele($modele)
    {
        $this->modele = $modele;
    }

    public function getAnnee()
    {
        return $this->annee;
    }

    public function setAnnee($annee)
    {
        $this->annee = $annee;
    }
}

class MercedesBenz extends Voiture
{

    private $couleur;
    private $modele;
    private $annee;

    public function __construct($moteur, $portes, $couleur, $modele, $annee)
    {
        $this->moteur = $moteur;
        $this->portes = $portes;
        $this->couleur = $couleur;
        $this->modele = $modele;
        $this->annee = $annee;
    }

    public function getCouleur()
    {
        return $this->couleur;
    }

    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;
    }

    public function getModele()
    {
        return $this->modele;
    }

    public function setModele($modele)
    {
        $this->modele = $modele;
    }

    public function getAnnee()
    {
        return $this->annee;
    }

    public function setAnnee($annee)
    {
        $this->annee = $annee;
    }
}

$audi1 = new Audi(200, 5, "Rouge", "RS Q3", 2019);
echo "L'audi 1 a un moteur de " . $audi1->getMoteur() . " chevaux.<br>";
echo "L'audi 1 a " . $audi1->getPortes() . " portes.<br>";
echo "L'audi 1 a la couleur " . $audi1->getCouleur() . ". <br>";
echo "L'audi 1 est un " . $audi1->getModele() . ". <br>";
echo "L'audi 1 est de l'année " . $audi1->getAnnee() . ". <br>";

echo "<hr>";

$audi2 = new Audi(300, 3, "Grise", "R8", 2020);
echo "L'audi 2 a un moteur de " . $audi2->getMoteur() . " chevaux.<br>";
echo "L'audi 2 a " . $audi2->getPortes() . " portes.<br>";
echo "L'audi 2 a la couleur " . $audi2->getCouleur() . ". <br>";
echo "L'audi 2 est un " . $audi2->getModele() . ". <br>";
echo "L'audi 2 est de l'année " . $audi2->getAnnee() . ". <br>";

echo "<hr>";

$audi3 = new Audi(250, 5, "Noir", "RS5", 2018);
echo "L'audi 3 a un moteur de " . $audi3->getMoteur() . " chevaux.<br>";
echo "L'audi 3 a " . $audi3->getPortes() . " portes.<br>";
echo "L'audi 3 a la couleur " . $audi3->getCouleur() . ". <br>";
echo "L'audi 3 est un " . $audi3->getModele() . ". <br>";
echo "L'audi 3 est de l'année " . $audi3->getAnnee() . ". <br>";

echo "<hr>";

$bmw1 = new BMW(200, 5, "Bleu", "Classe 1", 2018);
echo "La bmw 1 a un moteur de " . $bmw1->getMoteur() . " chevaux.<br>";
echo "La bmw 1 a " . $bmw1->getPortes() . " portes.<br>";
echo "La bmw 1 a la couleur " . $bmw1->getCouleur() . ". <br>";
echo "La bmw 1 est un " . $bmw1->getModele() . ". <br>";
echo "La bmw 1 est de l'année " . $bmw1->getAnnee() . ". <br>";

echo "<hr>";

$bmw2 = new BMW(300, 3, "Vert", "Classe 2", 2019);
echo "La bmw 2 a un moteur de " . $bmw2->getMoteur() . " chevaux.<br>";
echo "La bmw 2 a " . $bmw2->getPortes() . " portes.<br>";
echo "La bmw 2 a la couleur " . $bmw2->getCouleur() . ". <br>";
echo "La bmw 2 est un " . $bmw2->getModele() . ". <br>";
echo "La bmw 2 est de l'année " . $bmw2->getAnnee() . ". <br>";

echo "<hr>";

$bmw3 = new BMW(250, 5, "Noir", "Classe 3", 2020);
echo "La bmw 3 a un moteur de " . $bmw3->getMoteur() . " chevaux.<br>";
echo "La bmw 3 a " . $bmw3->getPortes() . " portes.<br>";
echo "La bmw 3 a la couleur " . $bmw3->getCouleur() . ". <br>";
echo "La bmw 3 est un " . $bmw3->getModele() . ". <br>";
echo "La bmw 3 est de l'année " . $bmw3->getAnnee() . ". <br>";

echo "<hr>";

$mercedesBenz1 = new MercedesBenz(200, 5, "Rouge", "GLC", 2019);
echo "La mercedesBenz 1 a un moteur de " . $mercedesBenz1->getMoteur() . " chevaux.<br>";
echo "La mercedesBenz 1 a " . $mercedesBenz1->getPortes() . " portes.<br>";
echo "La mercedesBenz 1 a la couleur " . $mercedesBenz1->getCouleur() . ". <br>";
echo "La mercedesBenz 1 est un " . $mercedesBenz1->getModele() . ". <br>";
echo "La mercedesBenz 1 est de l'année " . $mercedesBenz1->getAnnee() . ". <br>";

echo "<hr>";

$mercedesBenz2 = new MercedesBenz(300, 3, "Grise", "GT", 2020);
echo "La mercedesBenz 2 a un moteur de " . $mercedesBenz2->getMoteur() . " chevaux.<br>";
echo "La mercedesBenz 2 a " . $mercedesBenz2->getPortes() . " portes.<br>";
echo "La mercedesBenz 2 a la couleur " . $mercedesBenz2->getCouleur() . ". <br>";
echo "La mercedesBenz 2 est un " . $mercedesBenz2->getModele() . ". <br>";
echo "La mercedesBenz 2 est de l'année " . $mercedesBenz2->getAnnee() . ". <br>";

echo "<hr>";

$mercedesBenz3 = new MercedesBenz(250, 5, "Noir", "Classe E", 2018);
echo "La mercedesBenz 3 a un moteur de " . $mercedesBenz3->getMoteur() . " chevaux.<br>";
echo "La mercedesBenz 3 a " . $mercedesBenz3->getPortes() . " portes.<br>";
echo "La mercedesBenz 3 a la couleur " . $mercedesBenz3->getCouleur() . ". <br>";
echo "La mercedesBenz 3 est un " . $mercedesBenz3->getModele() . ". <br>";
echo "La mercedesBenz 3 est de l'année " . $mercedesBenz3->getAnnee() . ". <br>";

echo "<hr>";
