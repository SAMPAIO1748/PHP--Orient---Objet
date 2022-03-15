<?php

final class Application // final indique que la  Application ne pourra JAMAIS être héritée
{
    public function lancementApplciation()
    {
        return "L'application se lance comme cela.";
    }
}

//class Extension extends Application {} // erreur fatal, on ne peut pas hérité d'une classe finale !!!!! INTERDIT, VERBOTEN, FORBIDDEN !!!!!

$app = new Application;
echo $app->lancementApplciation();


echo '<hr>';

class Application2
{
    final public function lancementApplciation2()
    {
        return "L'application 2 se lance comme ceci.";
    }
}

$app2 = new Application2();
echo $app2->lancementApplciation2();

echo "<hr>";

class Extension2 extends Application2
{
    //public function lancementApplciation2(){return 'toto';} // erreur fatal !!! Une méthode final ne peut pas être surchargée ou redéfinie
    // Or lancementApplciation2 est une méthode final de la class Application2 qui est héritée par la classe extension2
}

$ext2 = new Extension2;
echo $ext2->lancementApplciation2();

/******
 * 
 * - Une classe finale ne peut pas être héritée.
 * - Une classe final a aura forcément des méthodes qui ne pourront pas être surchargées ou redéfinies.
 *  (aucun interêt de mettre le mot-clé final sur les méthodes d'une classe final)
 * - Une classe final peut comporter des méthodes normales
 * - Une méthode private avec le mot-clé final n'a aucun interêt 
 *  (car on peux la modifier uniquement dans la classe où elle a été codé, elle ne risque pas de pouvoir être redéfinie ou surchargée)
 * - Une classe finale reste instanciable
 * - Une méthode finale peut être présente dans une classe normale.
 * - Une méthode finale permet d'éviter qu'elle soit redéfinie ou surchargée.
 * - L'interêt de mettre le mot-clé "final" sur une méthode est de vérouiller le code de cette méthode afin d'empêcher toute sous-classe
 *  de la redéfinir.
 * (quand nouss voulons être sûr que le comportement d'une méthode est préservé durant l'héritage)
 * 
 * 
 * 
 ******/
