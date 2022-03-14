<?php

class Etudiant
{
    private $prenom;

    // la fonction __construct est une méthode magique qui est appelée automatiquement lors du "new"
    // On ne peut pas déclarer deux __construct dans une même class.
    public function __construct($arg)
    {
        // echo "Instanciation avec l'information suivante : " . $arg;
        $this->setPrenom($arg);
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($arg)
    {
        $this->prenom = $arg;
    }
}

$etudiant = new Etudiant('Roger');
echo "Prenom : " . $etudiant->getPrenom();
echo "<br>";
$etudiant->__construct('René'); // le constrcuteur peut tout de même être appelé comme une méthode "classique".
echo "Prenom : " . $etudiant->getPrenom();
echo "<br>";
$etudiant->setPrenom('Robert');
echo "Prenom : " . $etudiant->getPrenom();
