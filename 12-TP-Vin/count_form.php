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

    <form action="add_count.php" method="post">
        <div class="input">
            <label for="name">Nom</label>
            <input type="text" name="name" id="name">
        <div class="input">
            <label for="firstname">Prénom</label>
            <input type="text" name="firstname" id="firstname">
        </div>
        <div class="input">
            <label for="mail">Email</label>
            <input type="email" name="mail" id="mail">
        </div>
        <div class="input">
            <label for="phone">Téléphone</label>
            <input type="text" name="phone" id="phone">
        </div>
        <div class="input">
            <label for="adress">Adresse</label>
            <input type="text" name="adress" id="adress">
        </div>
        <div class="input">
            <label for="zipcode">Code Postal</label>
            <input type="number" name="zipcode" id="zipcode">
        </div>
        <div class="input">
            <label for="city">Ville</label>
            <input type="text" name="city" id="city">
        </div>
        <div class="input">
            <label for="age">Age</label>
            <input type="number" name="age" id="age">
        </div>
        <div class="input">
            <input type="submit" value="S'inscrire">
        </div>
    </form>
    
</body>
</html>