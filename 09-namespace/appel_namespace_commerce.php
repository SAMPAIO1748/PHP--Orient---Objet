<?php

require_once('namespace_commerce.php'); // on appelle le fichier namespace_commerce.php
use Commerce2, Commerce3; // permet de dire quels namespaces on veut importer.

$produit2 = new Commerce2\Produit;
var_dump($produit2);

echo "<hr>";

$produit3 = new Commerce3\Produit;
var_dump($produit3);

echo "<hr>";

// Exercice : créer $panier basé sur la classe Panier et $commande basé sur la classe Commande et afficher les objets avec des var_dump()
