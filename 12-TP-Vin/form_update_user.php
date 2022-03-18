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
        <h2><a href="login_form.php">Se déconnecter</a></h2>
        <h2><a href="producers.php">Producteurs de vin</a></h2>
    </div>

    <?php
    
        $bdd = new PDO("mysql:host=localhost;dbname=winej2", "root", "root");
        $sql = "SELECT * FROM user WHERE id = :id";
        $req = $bdd->prepare($sql);
        $req->bindValue(":id", $_GET['id'], PDO::PARAM_INT);
        $req->execute();
        $res = $req->fetch(PDO::FETCH_ASSOC);
    
    ?>
    
    <form action="update_user.php" method="post">
        <div class="input dnone">
            <input type="number" name="id" id="id" value="<?php echo $res['id'] ?>">
        </div>
        <div class="input">
            <label for="name">Nom</label>
            <input type="text" name="name" id="name" value="<?php echo $res['name'] ?>">
        </div>
        <div class="input">
            <label for="firstname">Prénom</label>
            <input type="text" name="firstname" id="firstname" value="<?php echo $res['firstname'] ?>">
        </div>
        <div class="input">
            <label for="mail">Email</label>
            <input type="text" name="mail" id="mail" value="<?php echo $res['mail'] ?>">
        </div>
        <div class="input">
            <label for="phone">Téléphone</label>
            <input type="text" name="phone" id="phone" value="<?php echo $res['phone'] ?>">
        </div>
        <div class="input">
            <label for="adress">Adresse</label>
            <input type="text" name="adress" id="adress" value="<?php echo $res['adress'] ?>">
        </div>
        <div class="input">
            <label for="zipcode">Code Postal</label>
            <input type="number" name="zipcode" id="zipcode" value="<?php echo $res['zipcode'] ?>">
        </div>
        <div class="input">
            <label for="ville">Ville</label>
            <input type="text" name="ville" id="ville" value="<?php echo $res['ville'] ?>">
        </div>
        <div class="input">
            <label for="age">Age</label>
            <input type="number" name="age" id="age" value="<?php echo $res['age'] ?>">
        </div>
        <div class="input">
            <input type="submit" value="Enregistrer">
        </div>
    </form>

    
</body>
</html>