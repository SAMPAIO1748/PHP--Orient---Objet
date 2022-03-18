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

<?php 

    $bdd = new PDO ('mysql:host=localhost;dbname=winej2', 'root', 'root');
    $sql_type = "SELECT name FROM type_wine WHERE id = :id";
    $requete_type = $bdd->prepare($sql_type);
    $requete_type->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
    $requete_type->execute();
    $resultat_type = $requete_type->fetch(PDO::FETCH_ASSOC);

?>

<div class="menu">
    <h2><a href="types.php">Types de vin</a></h2>
    <h2><a href="users.php">Utilisateurs</a></h2>
    <h2><a href="producers.php">Producteurs de vin</a></h2>
</div>

<h2 class="title"><?php echo $resultat_type['name'] ?></h2>

<?php 

    
    $sql = "SELECT * FROM wine INNER JOIN producer ON producer.id = wine.id_producer WHERE id_type_wine = :id";
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
            <th>Producteur</th>
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