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

    $bdd = new PDO("mysql:host=localhost;dbname=bibliotheque", "root", "root");

    $sql = "SELECT * FROM genre";

    $requete = $bdd->prepare($sql);

    $requete->execute();

    $resultat = $requete->fetchAll(PDO::FETCH_ASSOC);

    //var_dump($resultat);

    ?>

    <table>
        <thead>
            <tr>
                <th>Libellé</th>
            </tr>
        </thead>
        <tbody>

            <?php
            foreach ($resultat as $genre) {
                echo "<tr><td><a href='show_genre.php?id=" .
                    $genre['id'] . "'>" .
                    $genre['libelle'] . "</a></td></tr>";
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