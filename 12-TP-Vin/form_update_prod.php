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
<h1> <a href="list_wine.php">Vins</a></h1>

<div class="menu">
    <h2><a href="types.php">Types de vin</a></h2>
    <h2><a href="users.php">Utilisateurs</a></h2>
    <h2><a href="producers.php">Producteurs de vin</a></h2>
</div>

<?php

    $bdd = new PDO ('mysql:host=localhost;dbname=winej2', 'root', 'root');
    $sql = "SELECT * FROM producer WHERE id = :id";
    $requete = $bdd->prepare($sql);
    $requete->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
    $requete->execute();

    $resultat = $requete->fetch(PDO::FETCH_ASSOC);
    
?>


<h2 class="title">Producteur :</h2>

<form action="update_prod.php" method="post">
    <div class="input dnone">
        <input type="text" name="id" id="id" value="<?php echo $resultat['id'] ?>">
    </div>
    <div class="input">
        <label for="name">Nom</label>
        <input type="text" name="name" id="name" value="<?php echo $resultat['name'] ?>">
    </div>
    <div class="input">
        <label for="adress">Adresse</label>
        <input type="text" name="adress" id="adress" value="<?php echo $resultat['address'] ?>">
    </div>
    <div class="input">
        <label for="zipcode">Code Postal</label>
        <input type="number" name="zipcode" id="zipcode" value="<?php echo $resultat['zipcode'] ?>">
    </div>
    <div class="input">
        <label for="city">Ville</label>
        <input type="text" name="city" id="city" value="<?php echo $resultat['city'] ?>">
    </div>
    <div class="input">
        <input type="submit" value="Enregistrer">
    </div>
</form>
    
</body>
</html>