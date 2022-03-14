<?php

class Homme
{
    // private veut dire que c'est accessible uniquement dans la classe où cela a été déclaré
    private $prenom;
    private $nom;

    // Comme les propriétés sont privates elles ne sont pas accessible par l'objet.
    // Pour pouvoir quand même y accéder, on va créer des méthodes spécifiques :
    // les getters : méthodes pour récupérer la valeur d'une propriété
    // les setters : méthodes pour modifier la valeur d'une propriété

    public function setPrenom($valeur)
    {
        if (is_string($valeur)) {
            // $this représente l'objet en cours, c'est-à-dire l'objet qui exécute la méthode
            $this->prenom = $valeur;
        }
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setNom($valeur)
    {
        if (is_string($valeur)) {
            $this->nom = $valeur;
        }
    }

    public function getNom()
    {
        return $this->nom;
    }
}
