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
<h1> <a href="list.php">Vins</a></h1>

<div class="menu">
    <h2><a href="types.php">Types de vin</a></h2>
    <h2><a href="users.php">Utilisateurs</a></h2>
    <h2><a href="producers.php">Producteurs de vin</a></h2>
</div>


<?php

    $bdd = new PDO ('mysql:host=localhost;dbname=winej2', 'root', 'root');

    $sql_producer = "SELECT name FROM producer WHERE id = :id";
    $requete_producer = $bdd->prepare($sql_producer);
    $requete_producer->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
    $requete_producer->execute();
    $resultat_producer = $requete_producer->fetch(PDO::FETCH_ASSOC);

?>

<h2 class="title"><?php echo $resultat_producer['name'] ?></h2>

<?php 

    
    $sql = "SELECT * FROM wine INNER JOIN type_wine ON type_wine.id = wine.id_type_wine WHERE id_producer = :id";
    $requete = $bdd->prepare($sql);
    $requete->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
    $requete->execute();

    $resultat = $requete->fetchAll();

?>

<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Appelation</th>
            <th>Type</th>
        </tr>
    </thead>
    <tbody>
        <?php
        
            foreach($resultat as $wine){
                echo '<tr><td><a href="wine.php?id=' . $wine[0] . '">' . $wine[1] . 
                '</a></td><td>' . $wine[3] . 
                '</td><td>' . $wine[7] . '</td></tr>';
            }
        
        ?>
    </tbody>
</table>
</body>
</html>