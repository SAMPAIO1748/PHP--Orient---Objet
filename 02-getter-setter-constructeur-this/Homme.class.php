<?php

class Homme
{
    // private veut dire que c'est accessible uniquement dans la classe où cela a été déclaré
    private $prenom;
    private $nom;

    // Comme les propriétés sont privates elles ne sont pas accessible par l'objet.
    // Pour pouvoir quand même y accéder, on va créer des méthodes spécifiques :
    // les getters : méthodes pour récupérer la valeur d'une propriété
    // les setters : méthodes pour modifier la valeur d'une propriété

    public function setPrenom($valeur)
    {
        if (is_string($valeur)) {
            // $this représente l'objet en cours, c'est-à-dire l'objet qui exécute la méthode
            $this->prenom = $valeur;
        }
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setNom($valeur)
    {
        if (is_string($valeur)) {
            $this->nom = $valeur;
        }
    }

    public function getNom()
    {
        return $this->nom;
    }
}

$homme1 = new Homme();
var_dump($homme1);
echo '<br>';
$homme1->setPrenom("Julien"); // je modifie l'élément dans l'objet.
echo "Homme 1 a pour prénom : " . $homme1->getPrenom() . " . <br>"; // j'accède à l'élément de l'objet
// petit exo donner le nom Cottet a $homme1 et afficher le nom.
$homme1->setNom("Cottet"); // je modifie l'élément dans l'objet
echo "Homme 1 a pour nom : " . $homme1->getNom() . " . <br>"; // j'accède à l'élément de l'objet

$homme2 = new Homme();
echo " Prenom : " . $homme2->getPrenom();
var_dump($homme2);
// Comme on a instancié un nouvel objet Homme avec $homme2
// les propriétés de $homme2 sont NULL car les changements de valeurs avec les setter ne s'applique qu'à un seul objet
// nous avons appliqué setPrenom et setNom uniquement à $homme1 donc seul $homme1 a vu ses propriétés changeait de valeur
// $homme2 n'est pas concerné par les settes appliqués sur $homme1
