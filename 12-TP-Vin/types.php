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

<h1> <a href="list.php">Vins</a></h1>

<div class="menu">
    <h2><a href="types.php">Types de vin</a></h2>
    <h2><a href="users.php">Utilisateurs</a></h2>
    <h2><a href="producers.php">Producteurs de vin</a></h2>
</div>

<h2 class="title">Types de vin</h2>

<?php 

    $bdd = new PDO ('mysql:host=localhost;dbname=winej2', 'root', 'root');
    $sql = "SELECT * FROM type_wine";
    $requete = $bdd->prepare($sql);
    $requete->execute();
    $resultat = $requete->fetchAll(PDO::FETCH_ASSOC);

?>

<table>
    <thead>
        <tr>
            <th>Type</th>
            <th>Modifier</th>
            <th>Supprimer</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        
            foreach($resultat as $type){
                echo '<tr><td><a href="type.php?id=' . $type['id'] . '">' . $type["name"] . '</a></td><td><a href="form_update_type.php?id=' . $type['id'] . 
                '">Modifier le type</a></td><td><a href="delete_type.php?id=' . $type['id'] . '">Supprimer le type</a></td></tr>';
            }
        
        ?>
    </tbody>
</table>

<h3><a href="form_add_type.php">Ajouter un type</a></h3>
    
</body>
</html>