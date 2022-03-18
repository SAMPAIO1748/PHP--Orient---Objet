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

    $host = mysqli_connect("localhost", "root", "root");
    $bdd = mysqli_select_db($host, "winej2");
    $sql = "SELECT * FROM type_wine WHERE id = " . $_GET['id'] .  "";
    $resultat = mysqli_query($host, $sql);

    $ligne_resultat = mysqli_fetch_assoc($resultat);
?>

<h2 class="title">Type : <?php echo $ligne_resultat['name'] ?></h2>

<form action="update_type.php" method="post">
    <div class="input">
        <input type="number" name="id" id="id" class="dnone" value="<?php echo $ligne_resultat['id'] ?>">
    </div>
    <div class="input">
        <label for="name">Nom</label>
        <input type="text" name="name" id="name" value="<?php echo $ligne_resultat['name'] ?>">
    </div>
    <div class="input">
        <input type="submit" value="Enregistrer">
    </div>
</form>





    
</body>
</html>