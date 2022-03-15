<?php

class Membre
{
    public $id = 15;
    public $pseudo;
    public $mdp;

    public function __construct()
    {
        echo "Internaute ! <hr>";
    }

    public function inscription()
    {
        return "Je m'inscris <hr>";
    }

    public function seConnecter()
    {
        return "Je me connecte <hr>";
    }
}

class Admin extends Membre // extends = héritage, comme include, comme si je faisais un copier coller du code de Memebre dans Admin
{
    public function accessBackOffice()
    {
        return "Accés BackOffice : Oui ! <hr>";
    }
}

$admin = new Admin; // affiche "Internaute !" car je crée un einstance de Admin et Admin hérite de la class Membre 
//                      (y compris le constructeur qui s'exécute)
echo $admin->seConnecter();
echo $admin->inscription();
echo $admin->accessBackOffice();
echo $admin->id . "<hr>";
var_dump($admin->pseudo);
echo "<hr>";
var_dump($admin->mdp);
echo "<hr>";
$membre = new Membre;
// $membre->accessBackOffice(); // impossible car Admin hérite de Membre donc Admin a accés à tout le code de Membre 
// mais ce n'est pas réciproque Membre n'hérite pas de Admin donc il n'a pas accés au code de la class Admin.
