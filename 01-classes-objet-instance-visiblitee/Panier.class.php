<?php

class Panier
{
    // public veut dire que la propriété est accessible de partout.
    public $nbProduit; // Propriété

    public function ajouterArticle() // méthode
    {
        return "L'article a été ajouté";
    }

    // protected veut dire accessible uniquement dans la classe où cela a été coder et aussi dans les classes héritères
    protected function retirerArticle()
    {
        return "L'article a été supprimé";
    }

    // private veut dire accessible uniquement dans la classe où cela a été déclaré.
    private function affichageArticle()
    {
        return "Voici les articles";
    }
}

$panier1 = new Panier; // instanciation
var_dump($panier1); // type (object), nom (de la classe), Référence de l'objet
echo '<br>';
var_dump(get_class_methods($panier1));
echo '<br>';
$panier1->nbProduit = 5;
echo 'Panier 1 contient ' . $panier1->nbProduit . ' produits .';
echo '<br>';
echo "Panier 1 : " . $panier1->ajouterArticle() . " dans le panier 1.";
// echo "Panier 1" . $panier1->retirerArticle() . "<br>"; méthode protected donc erreur car la méthode est accessible uniquement dan la
// classe où elle a été codée.
echo "<br>";
// cho "Panier 1 : " . $panier1->affichageArticle() . " dans le panier 1.";

$panier2 = new Panier;
$panier2->nbProduit = 3;
echo "Panier 2 contient " . $panier2->nbProduit . " produits.";
echo "<br>";
var_dump($panier2);
