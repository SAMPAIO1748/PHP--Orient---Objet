<?php

/*******
 * class Membre
 * {
 * 
 *  private $pseudo;
 *  private $mdp;
 *  private $role;
 * 
 * }
 * 
 * Créer les getters et les setters qui vont bien avec cette classe
 * 
 * Instancier deux membres différents et donner des valeurs à leurs propriétés et les afficher
 * 
 */

class Membre
{

    private $pseudo;
    private $mdp;
    private $role;

    public function setPseudo($arg)
    {
        if (is_string($arg)) {
            $this->pseudo = $arg;
        }
    }

    public function getPseudo()
    {
        return $this->pseudo;
    }

    public function setMdp($arg)
    {
        $this->mdp = $arg;
    }

    public function getMdp()
    {
        return $this->mdp;
    }

    public function setRole($arg)
    {
        $this->role = $arg;
    }

    public function getRole()
    {
        return $this->role;
    }
}

$membre1 = new Membre;
$membre1->setPseudo("Patrick");
$membre1->setMdp("toto");
$membre1->setRole("admin");
echo "Pseudo : " . $membre1->getPseudo() . '<br>';
echo "Mdp : " . $membre1->getMdp() . '<br>';
echo "Role : " . $membre1->getRole() . '<br>';


$membre2 = new Membre;
$membre2->setPseudo("Stéphane");
$membre2->setMdp("tata");
$membre2->setRole("user");
echo "Pseudo : " . $membre2->getPseudo() . '<br>';
echo "Mdp : " . $membre2->getMdp() . '<br>';
echo "Role : " . $membre2->getRole() . '<br>';
