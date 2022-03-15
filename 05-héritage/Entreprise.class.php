<?php

class Plombier
{
    public function getSpecialite()
    {
        return "tuyaux, robinets, chauffe-eau, compteurs,... <hr>";
    }

    public function getHoraires()
    {
        return "8h/19h <hr>";
    }
}

class Electricien
{
    public function getSpecialite()
    {
        return 'pose de câbles, disjoncteurs, tableaux ou armoires électriques,... <hr>';
    }

    public function getHoraires()
    {
        return '10h/18h <hr>';
    }
}

class Entreprise // la classe Entreprise n'hérite pas d'une autre classe.
{
    public $numero = 0;

    public function appelUnEmploye($employe)
    {
        $this->numero++;
        $this->{"monEmploye" . $this->numero} = new $employe;
        // ex : 1er appel, je déclare la variable $this->monEnploye1 = new Plombier
        // 2nd appel, je déclare la variable $this->monEmploye2 = new Electricien
        return $this->{"monEmploye" . $this->numero};
    }
}

$entreprise = new Entreprise;

$entreprise->appelUnEmploye('Plombier');
echo $entreprise->monEmploye1->getSpecialite();
echo $entreprise->monEmploye1->getHoraires();


$entreprise->appelUnEmploye('Electricien');
echo $entreprise->monEmploye2->getSpecialite();
echo $entreprise->monEmploye2->getHoraires();


$entreprise->appelUnEmploye('Plombier');
$entreprise->appelUnEmploye('Electricien');

var_dump($entreprise);
