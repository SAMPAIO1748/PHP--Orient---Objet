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

    $sql = "SELECT * FROM genre WHERE id = :id";

    $requete = $bdd->prepare($sql);

    $requete->bindValue(":id", $_GET['id'], PDO::PARAM_INT);

    $requete->execute();

    $resultat = $requete->fetch(PDO::FETCH_ASSOC);

    //var_dump($resultat);

    ?>

    <table>

        <thead>
            <tr>
                <th>Libellé</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td><?php echo $resultat['libelle'] ?></td>
            </tr>
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