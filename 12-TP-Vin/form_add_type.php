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


<h2 class="title">Type :</h2>

<form action="add_type.php" method="post">
    <div class="input">
        <label for="name">Nom</label>
        <input type="text" name="name" id="name">
    </div>
    <div class="input">
        <input type="submit" value="Enregistrer">
    </div>
</form>





    
</body>
</html>