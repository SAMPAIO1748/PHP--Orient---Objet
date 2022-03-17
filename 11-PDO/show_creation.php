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

    $id = $_GET['id'];

    $bdd = new PDO('mysql:host=localhost;dbname=bibliotheque', 'root', 'root'); // connexion à la bdd.

    $sql = "SELECT * FROM creation WHERE id = :id"; // Requête SQL

    $requete = $bdd->prepare($sql); // Préparation de la requête

    $requete->bindValue(':id', $id, PDO::PARAM_INT); // Attribution de la valeur à la variable :id
    // en la sécurisant également en indiquant le type de la variable

    $requete->execute(); // Exécution de la requête

    $resultat = $requete->fetch(PDO::FETCH_ASSOC); // Rangement dans un tableau
    // fetch récupère le dernier résultat de la requête et le range dans un tableau

    //var_dump($resultat);




    ?>

    <table>
        <thead>
            <tr>
                <th>Titre</th>
                <th>Description</th>
                <th>Gallerie</th>
                <th>Date de création</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $resultat['titre']  ?></td>
                <td><?php echo $resultat['description']  ?></td>
                <td><?php echo $resultat['galerie']  ?></td>
                <td><?php echo $resultat['date_creation']  ?></td>
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