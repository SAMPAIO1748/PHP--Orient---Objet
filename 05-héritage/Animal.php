<?php

class Animal
{
    protected function deplacement()
    {
        return "Je me déplace";
    }

    public function manger()
    {
        return "Je mange chaque jour";
    }
}

// exercie : créer deux classes : Elephant et Chat qui héritent de Animal
// chaque classe aura la méthode quiSuisJe()
// la classe chat aura la méthode manger (qui retoutrne je mange comme un chat).

class Elephant extends Animal
{
    public function quiSuisJe()
    {
        return "Je suis un éléphant " . $this->deplacement();
    }
}

class Chat extends Animal
{
    public function quiSuisJe()
    {
        return "Je suis un chat";
    }

    public function manger() // redéfinition de la méthode
    {
        return "Je mange comme un chat";
    }
}

$elephant = new Elephant;
echo "Elephant : " . $elephant->quiSuisJe() . "<hr>";
echo "Elephant : " . $elephant->manger() . "<hr>";
// echo "Elephant : " . $elephant->deplacement() . "<hr>"; // erreur ! 
// Elephant hérite de la méthode protected mais je ne paux pas l'invoquer en dehors d'un classe

$chat = new Chat;
echo "Chat : " . $chat->quiSuisJe() . "<hr>";
echo "Chat : " . $chat->manger() . "<hr>"; // affiche : "Je mange comme un chat" et non pas "Je mange chaque jour"
//                                            car la méthode manger a été redéfinie dans la classe Chat.
// l'interpreteur cherche d'abord dans la classe Chat et seulement si la méthode n'avait pas été trouvé il aurait chercher dans la classe Animal
// qui est héritée par la classe Chat.
