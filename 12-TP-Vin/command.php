<!DOCTYPE html>
<html lang="en">
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

    $bdd = new PDO ('mysql:host=localhost;dbname=winej2', 'root', 'root');
    $sql = "SELECT * FROM command INNER JOIN card ON card.id = command.id LEFT JOIN wine ON card.id_wine = wine.id 
    INNER JOIN user ON user.id = command.id_user
    WHERE command.id = :id";
    $requete = $bdd->prepare($sql);
    $requete->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
    $requete->execute();

    $resultat = $requete->fetchAll();

?>

<h2 class="title"><?php echo $resultat[0][1] ?></h2>

<table>
    <thead>
        <tr>
            <th>Date</th>
            <th>Observation</th>
            <th>Utilisateur</th>
        </tr>
    </thead>
    <tbody>
        <?php
            echo '<tr><td>' . date('d/m/Y', strtotime($resultat[0][2])) . '</td><td>' .
            $resultat[0][3] . '</td><td>' . $resultat[0][15] . ' ' . $resultat[0][14] . 
            '</td></tr>';
        ?>
    </tbody>
</table>

<h2 class="title">Les vins de la commande</h2>

<table>
    <thead>
        <tr>
            <th>Vin</th>
            <th>Appelation</th>
        </tr>
    </thead>
    <tbody>
        <?php

        foreach($resultat as $wine){
            echo '<tr><td>' . $wine[8]  . '</td><td>' .
            $wine[10] . 
            '</td></tr>';
        }
            
        ?>
    </tbody>
</table>

    
</body>
</html>