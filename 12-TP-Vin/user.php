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

    $bdd = new PDO ("mysql:host=localhost;dbname=winej2", "root", "root");
    $sql = "SELECT * FROM user INNER JOIN profile ON profile.id = user.id_profile WHERE user.id = :id";
    $requete = $bdd->prepare($sql);
    $requete->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
    $requete->execute();

    $resultat = $requete->fetch();

    ?>

<h2 class="title">Utilisateur : <?php echo $resultat[2] . ' ' . $resultat[1] ?></h2>

<table>
    <thead>
        <tr>
            <th>Nom et Prénom</th>
            <th>Email</th>
            <th>Téléphone</th>
            <th>Adresse</th>
            <th>Code Postal</th>
            <th>Ville</th>
            <th>Age</th>
            <th>Profil</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <td><?php echo $resultat[1] . ' ' . $resultat[2] ?></td>
            <td><?php echo $resultat[3] ?></td>
            <td><?php echo $resultat[4] ?></td>
            <td><?php echo $resultat[5] ?></td>
            <td><?php echo $resultat[6] ?></td>
            <td><?php echo $resultat[7] ?></td>
            <td><?php echo $resultat[9] ?></td>
            <td><?php echo $resultat[11] ?></td>
        </tr>
    </tbody>
</table>

<h2 class="title">Commande de <?php echo $resultat[2] . ' ' . $resultat[1] ?></h2>

<?php 

    $sql1 = "SELECT * FROM command WHERE command.id_user = :id";
    $requete1 = $bdd->prepare($sql1);
    $requete1->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
    $requete1->execute();

    $resultat1 = $requete1->fetchAll();

    ?>

    <table>
        <thead>
            <tr>
                <th>Commande</th>
                <th>Observation</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            <?php
            
                foreach($resultat1 as $command){
                    echo '<tr><td><a href="command.php?id=' . $command[0] . '">' . $command[1] . 
                    '</td><td>' . $command[3] . '</td><td>' . date('d/m/Y', strtotime($command[2])) . '</td></tr>';
                }
            
            ?>
        </tbody>
    </table>
    
</body>
</html>