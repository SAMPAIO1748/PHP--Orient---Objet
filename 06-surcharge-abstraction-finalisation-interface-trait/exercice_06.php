<?php

abstract class Vehicule
{
    final public function demarrer()
    {
        return 'je demarre';
    }

    abstract public function carburant();

    public function nombreDeTesteObligatoire()
    {
        return 100;
    }
}

class Peugeot extends Vehicule
{
    public function carburant()
    {
        return "essence";
    }

    public function nombreDeTesteObligatoire()
    {
        return parent::nombreDeTesteObligatoire() + 70;
    }
}

class Renault extends Vehicule
{
    public function carburant()
    {
        return "diesel";
    }

    public function nombreDeTesteObligatoire()
    {
        return parent::nombreDeTesteObligatoire() + 30;
    }
}

/**
 * 1. Faire en sorte de ne pas voir d'objet Véhicule.
 * 2. Obligation pour la Reanult et la Peugeot de posséder la même méthode demarrer() qu'un Vehiclue de base
 * 3. Obligation pour la Renault de déclarer un carburant diesel et pour la Peugeot de déclarer un carburant essence.
 * 4. La Renault doit effectuer 30 tests supplémentaires qu'un Vehicule de base.
 * 5. La Peugeot doit effectuer 70 tests supplémentaires qu'un Vehicule de base.
 * 6. Effectuer les affichages necessaire.
 */


$peugeot = new Peugeot;
echo "Peugeot : " . $peugeot->demarrer() . "<br>";
echo "Peugeot : " . $peugeot->carburant() . "<br>";
echo "Peugeot : " . $peugeot->nombreDeTesteObligatoire() . "<hr>";

$renault = new Renault;
echo "Renault : " . $renault->demarrer() . "<br>";
echo "Renault : " . $renault->carburant() . "<br>";
echo "Renault : " . $renault->nombreDeTesteObligatoire() . "<hr>";
