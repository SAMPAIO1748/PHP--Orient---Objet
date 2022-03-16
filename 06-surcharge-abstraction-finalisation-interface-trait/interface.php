<?php
// Une interface est une liste de méthodes (sans contenu) qui permet de garantir que toutes les classes 
// qui implémentent l'interface conteindra forcément les méthodes de l'interface avec le même nom.
interface Mouvement
{
    public function deplacement();
}

class Bateau implements Mouvement // class Bateau extends Mouvement ne focntionne pas.
{
    public function deplacement() // obligation de recréer les méthodes de l'interface qu'on implémente pour éviter une erreur fatale. 
    {
        return "Je me déplace sur l'eau.";
    }
}

class Avion implements Mouvement
{
    public function deplacement()
    {
        return "Je vole.";
    }
}

// $mouvement = new Mouvement; // erreur fatale, on ne peut pas instancier une interface.

$bateau = new Bateau;
echo $bateau->deplacement();
echo '<br>';

$avion = new Avion;
echo $avion->deplacement();

// implémentation de plusieurs interfaces dans une classe

interface iA
{
    public function test1();
    // pas de visibilité private car les méthodes doivent être redéfinie (donc les méthodes d'une interface seront toujours public)
}

interface iB
{
    public function test2();
}

class A implements iA, iB // implémentation de deux interfaces. A condition que les interfaces n'aient aucune méthode portant le même nom.
{
    public function test1()
    {
        return "test1";
    }

    public function test2()
    {
        return "test2";
    }
}
echo "<hr>";
$a = new A;
echo $a->test1();
echo '<br>';
echo $a->test2();

// héritage entre interfaces

interface iC
{
    public function test3();
}

interface iD
{
    public function test4();
}

interface iE extends iC, iD
// héritage multiple entre interfaces.
{
    public function test5();
}

class B implements iE
{
    // Pour ne pas générer des erreurs, il va falloir écrire les méthodes de iC, iD et iE
    public function test3()
    {
        return "test 3";
    }

    public function test4()
    {
        return "test 4";
    }

    public function test5()
    {
        return "test 5";
    }
}

$b = new B;
echo "<hr>";
echo $b->test3();
echo '<br>';
echo $b->test4();
echo '<br>';
echo $b->test5();

// héritage + implémentation

class C
{
}

class D extends C implements iA
{
    public function test1()
    {
        return "test 1";
    }
}

$d = new D;
echo "<hr>";
echo $d->test1();

/**
 * 
 * - Une interface est une liste de méthode n'ayant pas de contenu devant obligatoirement être redéclarées dans la classe qui l'implémente
 * - Les interfaces permettent de créer du code qui spécifie quelles méthodes une classe doit implémenter.
 * - Toutes les méthodes déclarées dans une interface doivent être publiques et redéfinie dans la classe qui l'implémente.
 * - Lorsque que je souhaite me servir d'une interface, il faut préciser "implements" (et non pas extends) !!!
 * - Une interface n'est pas instanciable.
 * - Les méthodes d'une interface n'ont pas de contenu.
 * - On se sert d'une interface pour représenter un POINT COMMUN entre deux classes. Cela permet d'exiger un comportement à nos classes.
 * - Pour créer une interface, on réfléchit en terme de comportement et non en terme d'entité.
 * - Il est possible d'implémenter plusieurs interfaces à la fois.
 * - Une interface ne permet pas de factoriser le code.
 * - Pas de possiblité de mettre des propriétés dans une interface.
 * 
 * 
 */
