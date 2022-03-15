<?php

abstract class Joueur // classe abstraite, une classe abstraite ne peut pas être instanciée
{
    public function seConnecter()
    {
        return $this->EtreMajeur();
    }

    abstract public function EtreMajeur(); // les méthodes abstraites n'ont pas de contenu (no body / corps)
    abstract public function Devise(); // les méthodes abstraites n'ont pas de contenu (no body / corps)
}

class JoueurFR extends Joueur // je suis obligé de redéfinir les méthide abstraites de ma classe Mère sinon j'obtiens une erreur.
{
    public function EtreMajeur()
    {
        return 18;
    }

    public function Devise()
    {
        return "€";
    }
}

class JoueurUs extends Joueur
{
    public function EtreMajeur()
    {
        return 21;
    }

    public function Devise()
    {
        return "$";
    }
}

// $joueur = new Joueur; // erreur fatale on ne peut pas instanicer une classe abstraite.
$joueurFr = new JoueurFR;
echo $joueurFr->seConnecter();
echo '<br>';
echo $joueurFr->Devise();
echo '<br>';
echo $joueurFr->EtreMajeur();
echo "<hr>";
$joueurUs = new JoueurUS;
echo $joueurUs->seConnecter();
echo '<br>';
echo $joueurUs->Devise();
echo "<br>";
echo $joueurUs->EtreMajeur();

/**
 * - Une classe abstraite n'est PAS INSTANCIABLE.
 * - Les méthodes abstraites n'ont pas de contenu
 * - Lorsqu'on hérite de méthodes abstarites, nous sommes obliger de les redéfinir.
 * - Pour définir des méthodes abstraites, il est NECESSAIRE que la classe qui les contient soit elle-même abstraite.
 * - Un classe abstraite peut contenir des méthodes normales.
 */
