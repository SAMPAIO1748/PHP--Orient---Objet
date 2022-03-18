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

    <h2 class="title">Utilisateurs</h2>

    <?php 

    $bdd = new PDO ("mysql:host=localhost;dbname=winej2", "root", "root");
    $sql = "SELECT * FROM user INNER JOIN profile ON profile.id = user.id_profile";
    $requete = $bdd->prepare($sql);
    $requete->execute();

    $resultat = $requete->fetchAll();

?>

    <table>
        <thead>
            <tr>
                <th>NOM Prénom</th>
                <th>Email</th>
                <th>Profile</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
        </thead>
        <tbody>
            <?php
            
            foreach($resultat as $user){
                echo '<tr><td><a href="user.php?id=' . $user[0] . '">' . $user[1] . ' ' . $user[2] . 
                '</a></td><td>' . $user[3] . '</td><td>' . $user[11] . '</td><td><a href="form_update_user.php?id=' . $user[0] . 
                '">Modifier le compte</a></td><td><a href="delete_user.php?id=' . $user[0] . '">Supprimer le compte</a></td></tr>';
            }
            
            ?>
        </tbody>
    </table>
    
</body>
</html>