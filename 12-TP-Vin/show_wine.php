<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
        <h1><a href="list.php">Vins</a></h1>

        <div class="menu">
            <h2><a href="types.php">Types de vin</a></h2>
            <h2><a href="users.php">Utilisateurs</a></h2>
            <h2><a href="producers.php">Producteurs de vin</a></h2>
        </div>

        <?php

            $bdd = new PDO ('mysql:host=localhost;dbname=winej2', "root", "root");
            $sql = "SELECT * FROM wine 
            INNER JOIN type_wine ON type_wine.id = wine.id_type_wine
            INNER JOIN producer ON producer.id = wine.id_producer WHERE wine.id = :id";
            $requete = $bdd->prepare($sql);
            $requete->bindVAlue(':id', $_GET['id'], PDO::PARAM_INT);
            $requete->execute();
            $resultat = $requete->fetch();

        ?>

        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Appelation</th>
                    <th>Type</th>
                    <th>Producteur</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $resultat[1] ?></td>
                    <td><?php echo $resultat[2] ?></td>
                    <td><?php echo $resultat[3] ?></td>
                    <td><?php echo $resultat[8] ?></td>
                    <td><?php echo $resultat[10] ?></td>
                </tr>
            </tbody>
        </table>
</body>
</html>