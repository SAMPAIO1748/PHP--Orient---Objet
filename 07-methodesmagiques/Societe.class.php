<?php

// les méthodes magiques s'executent automatiquement

class Societe
{
    public $adresse;
    public $ville;
    public $cp;

    public function __construct()
    {
        echo "Instanciation de la société <hr>";
    }

    public function __set($nom, $valeur) // se déclenche uniquement en cas de tentative d'affectation sur une propriété qui n'existe pas
    {
        echo "La propriété " . $nom . " n'existe pas, la valeur " . $valeur . " n'a donc pas été affecté ! <hr>";
    }

    public function __get($nom) // se déclenche uniquement en cas de tentative d'affichage d'une propriété qui n'existe pas.
    {
        echo "La propriété " . $nom . " n'existe pas, on ne peut donc pas l'afficher ! <hr>";
    }

    public function __call($nom, $argument) // se déclenche uniquement en cas de tentative d'execution d'une méthode qui n'existe pas
    {
        echo "Tentative d'exécuter la méthode " . $nom . " mais elle n'existe pas. Les arguments étaient " . implode('-', $argument) . "<hr>";
    }
}

$societe1 = new Societe;


$societe1->region = "Ile-de-France"; // lorsque nous tentons d'affecter une valeur à une propriété qui n'existe pas,
// cela fonctionne car PHP étant permissif, il ajoute la proprété et la valeur à l'objet
// activation de la méthode __set()
//var_dump($societe1);


echo $societe1->pays; // n'affiche rien car la propriété n'existe pas.
// activation de la méthode __get()


echo $societe1->ggg(1, 2, 3); // erreur car la méthode ggg n'existe pas.
// activation de la méthode __call()

print '<pre>';
print_r($societe1);
print "</pre>";
echo "<hr>";
print '<pre>';
print_r(get_class_methods($societe1));
print "</pre>";

/**********
 * 
 * Pour information, d'autres méthodes magiques existent :
 * __callStatic($nom, $argument) : pour les méthodes 'static'.
 * __isset($nom) : se lance lors d'une condition isset/empty sur une propriété
 * __desctruct() : se lance à la fin de l'exécution du script. Pratique pour fermer la connexion à la BDD.
 * __toString() : se lance lorsqu'un objet tente d'être afficher par un "echo"
 * Il y aussi : __wakeup(), __sleep(), __invoke(), __clone,...
 * 
 **********/

/*****
 * 
 * - Tentative d'affecter une propriété qui n'existe pas:
 *      PHP d'origine : ça marche (pas normal), la propriété est crée, la valeur est affectée.
 *          (PHP est l'un des seuls langages qui le permet, PHP est trop permissif)
 *          Avec __set() : pas d'affectation si la propriété n'existe pas et on peut adresser un message d'erreur personnalisé
 * 
 * - Tentative d'afficher une proprété qui n'existe pas :
 *      PHP d'origine : unedifine (normal)
 *       Avec __get() : possibilité d'adresser un message d'erreur personnalisé.
 * 
 * - Tentative d'exécuter une méthode qui n'existe pas
 *     PHP d'origine : erreur (normal)
 *     Avec __call : possiblité d'adresser un message d'erreur personnalisé, on a plus l'erreur dans le navigateur
 * 
 *****/
