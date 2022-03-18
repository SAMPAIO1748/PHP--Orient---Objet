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

    <?php
    
        session_start();
        session_destroy();
    
    ?>
    
    <form action="login.php" method="post">
        <div class="input">
            <label for="name">Nom</label>
            <input type="text" name="name" id="name">
        </div>
        <div class="input">
            <label for="mail">Email</label>
            <input type="email" name="mail" id="mail">
        </div>
        <div class="input">
            <input type="submit" value="Connecter">
        </div>
    </form>

    <h2><a href="count_form.php">S'inscrire</a></h2>
</body>
</html>