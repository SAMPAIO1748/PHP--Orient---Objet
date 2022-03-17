<?php

namespace Commerce1;

echo __NAMESPACE__ . "<hr>"; // affiche le namespace dans lequel on est

class Commande
{
    public $nbCommande = 1;
}

namespace Commerce2;

echo __NAMESPACE__ . "<hr>"; // affiche le namespace dans lequel on est

class Produit
{
    public $nbProduit = 22;
}

namespace Commerce3;

echo __NAMESPACE__ . "<hr>"; // affiche le namespace dans lequel on est

class Panier
{
    public $nbProduit = 4;
}

class Produit
{
    public $nbProduit = 17;
}

/******
 * 
 * Comme on ne peut pas appeler deux classes de la même manière en PHP,
 * on va attribuer à ces classes des namespaces (espace de nom) qui vont permettre de distinguer des classes qui ont le même nom.
 * Un namespace est un peu comme un nom de famille qui va permettre de mieux différencier des personnes qui ont le même prénom.
 * 
 ******/
