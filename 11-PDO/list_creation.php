<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    // La classe PDO (PHP Data Object) est une classe existantes de PHP
    // elle permet de se connecter à des bases de données et ainsi
    // faire des requêtes SQL.
    // On pourra réaliser le CRUD (Create Read Update et Delete) d'une table d'une base de données (bdd)

    $bdd = new PDO("mysql:host=localhost;dbname=bibliotheque", "root", "root"); // Connexion à la bdd avec MAMP

    // $bdd = new PDO("mysql:host=localhost;dbname=bibliotheque", "root", ""); // Connexion à la bdd avec XAMPP, WAMP

    $sql = "SELECT * FROM creation"; // Requête SQL sous forme de chaîne de caractères PHP.

    $requete = $bdd->prepare($sql); // Préparation de la requête

    $requete->execute(); // Exécution de la requête

    $resultat = $requete->fetchAll(PDO::FETCH_ASSOC);
    /**
     * Mise sous forme de tableau du résultat grâce à fetchAll(), qui récupère toutes les entrés de requête et les ranges dans un tableau
     * PDO::FETCH_ASSOC fait que le tableau final est un tableau associatif
     */

    var_dump($resultat);

    ?>


</body>

</html>