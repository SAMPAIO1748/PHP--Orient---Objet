<?php

require_once('namespace_commerce.php'); // on appelle le fichier namespace_commerce.php
use Commerce2, Commerce3, Commerce1; // permet de dire quels namespaces on veut importer.

$produit2 = new Commerce2\Produit; // Il ne faut pas oublier le namespace et le \ sinon la classe ne sera pas identifiée
var_dump($produit2);

echo "<hr>";

$produit3 = new Commerce3\Produit;
var_dump($produit3);

echo "<hr>";

// Exercice : créer $panier basé sur la classe Panier et $commande basé sur la classe Commande et afficher les objets avec des var_dump()

$panier = new Commerce3\Panier;
var_dump($panier);

echo "<hr>";

$commande = new Commerce1\Commande;
var_dump($commande);

/**
 * 
 * Les namespaces (ou espaces de nom) permettent de ranger des classes qui pourront avoir des noms identiques
 * Cela est très pratique lors d'un travail collaboratif pour éviter que des fonctions ou des classes soit identiques.
 * Cela évite des problèmes dans le code du projet.
 * 
 * 
 */
