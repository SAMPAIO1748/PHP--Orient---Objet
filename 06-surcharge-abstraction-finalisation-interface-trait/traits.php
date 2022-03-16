<?php

trait TPanier
{
    public $nbProduit = 17;
    public function affichageProduits()
    {
        return 'Affichage des produits !';
    }
}

trait TPays
{
    public $pays = "France";
}

trait TMembre
{
    use TPays; // un trait peut utiliser un autre trait.

    public function affichageMembres()
    {
        return "Affichage des membres !";
    }
}

class Site
{
    use TPanier, TMembre; // utilisation des traits
}

$site = new Site;
echo $site->affichageProduits() . "<hr>";
echo $site->affichageMembres() . "<hr>";
echo $site->nbProduit . "<hr>";
echo $site->pays . "<hr>";

var_dump($site);
echo "<hr>";
var_dump(get_class_methods($site));

/**
 * 
 * - Les traits ont été inventés pour repousser les limites de l'héritage des classes (pas d'héritage multiple de classe en PHP), 
 * c'est une sorte de pansement
 * - Une classe ne peut pas hériter de plusieurs classes à la fois alors qu'elle peut importer (donc hériter) de plusieurs traits.
 * - Il ets utile d'utiliser les traits quand l'une de vos classes a besoin d'une méthode X de la classe A, Y de la classe B,
 *  Z de la classe C...
 * - Un trait est un regroupement de méthodes et de propriétés pouvant être importées dans une classe.
 * - Un trait ne peut pas être instancié.
 * 
 */

// Si une classe déclare une méthode et qu'elle utilise untrait possédant une méthode qui a le même nom, alors c'est la méthode déclarée
// dans la classe qui aura le dessus.

trait MonTrait
{
    public function DireBonjour()
    {
        return "Hello !";
    }
}

class MaClasse
{
    use MonTrait;

    public function DireBonjour()
    {
        return "Bonjour !";
    }
}

$objet = new MaClasse;
echo "<hr>" . $objet->DireBonjour() . "<hr>"; // Affichera "Bonjour !" car c'est la méthode de la classe qui prend le dessus.

// il est possible de donner un alias à une méthode d'un trait.

trait A
{
    public function saySomething()
    {
        return "Je suis le trait A ! ";
    }
}

class MaClasseA
{
    use A {
        saySomething as sayWhoYouAre;
    }
}

$a = new MaClasseA;
echo $a->sayWhoYouAre() . "<hr>"; // Affichera " Je suis le trait A !"
echo $a->saySomething() . "<hr>"; // Affichera " Je suis le trait A !"
