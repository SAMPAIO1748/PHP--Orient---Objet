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
     * Mise sous forme de tableau du résultat grâce à fetchAll(), qui récupère toutes les entrés de requête et les range dans un tableau
     * PDO::FETCH_ASSOC fait que le tableau final est un tableau associatif
     */

    //var_dump($resultat);

    ?>

    <table>

        <thead>
            <tr>
                <th>Titre</th>
                <th>Description</th>
                <th>Gallerie</th>
                <th>Date de création</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
        </thead>

        <tbody>

            <?php

            foreach ($resultat as $creation) {
                echo "<tr><td><a href='show_creation.php?id=" .
                    $creation['id'] . "'>" .
                    $creation['titre'] . "</a></td><td>" .
                    $creation['description'] . "</td><td>" .
                    $creation['galerie'] . '</td><td>' .
                    $creation['date_creation']  . "</td><td><a href='update_form_creation.php?id=" .
                    $creation['id'] . "'>Modifier la création</a></td><td><a href='delete_creation.php?id=" .
                    $creation['id'] . "'>Supprimer la création</a></td></tr>";
            }

            ?>

        </tbody>

    </table>


    <style>
        table,
        tr,
        td,
        th {
            border: black solid 2px;
        }
    </style>


</body>

</html>