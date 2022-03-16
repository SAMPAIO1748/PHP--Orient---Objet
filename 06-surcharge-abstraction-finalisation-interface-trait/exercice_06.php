<?php

class Vehicule
{
    public function demarrer()
    {
        return 'je demarre';
    }

    public function carburant()
    {
        return;
    }

    public function nombreDeTesteObligatoire()
    {
        return 100;
    }
}

class Peugeot
{
}

class Renault
{
}

/**
 * 1. Faire en sorte de ne pas voir d'objet Véhicule.
 * 2. Obligation pour la Reanult et la Peugeot de posséder la même méthode demarrer() qu'un Vehiclue de base
 * 3. Obligation pour la Renault de déclarer un carburant diesel et pour la Peugeot de déclarer un carburant essence.
 * 4. La Renault doit effectuer 30 tests supplémentaires qu'un Vehicule de base.
 * 5. La Peugeot doit effectuer 70 tests supplémentaires qu'un Vehicule de base.
 * 6. Effectuer les affichages necessaire.
 */
