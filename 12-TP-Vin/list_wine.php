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

    <?php

        session_start();

        if(empty($_SESSION['name']) && empty($_SESSION['firstname'])){
            header('Location: login_form.php');
        }
    
        $bdd = new PDO ("mysql:host=localhost;dbname=winej2", "root", "root");
        $sql = "SELECT * FROM wine 
        INNER JOIN type_wine ON type_wine.id = wine.id_type_wine
        INNER JOIN producer ON producer.id = wine.id_producer";
        $requete = $bdd->prepare($sql);
        $requete->execute();
        $resultat = $requete->fetchAll();
    
    ?>

    <h1> <a href="list.php">Vins</a></h1>

    <div class="menu">
        <h2><a href="types.php">Types de vin</a></h2>
        <h2><a href="users.php">Utilisateurs</a></h2>
        <h2><a href="login_form.php">Se déconnecter</a></h2>
        <h2><a href="producers.php">Producteurs de vin</a></h2>
    </div>

    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Type</th>
                <th>Producteur</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
        </thead>
        <tbody>
            <?php

                foreach($resultat as $wine){
                    echo '<tr><td><a href="show_wine.php?id=' . $wine[0] . '">' . $wine[1] . 
                    '</a></td><td>' .  $wine[8] . '</td><td>' . $wine[10] . 
                    '</td><td><a href="form_update_wine.php?id=' . $wine[0] . '">Modifier le vin</a>' .
                    '</td><td><a href="delete_wine.php?id=' . $wine[0] . '">Supprimer le vin</a>' . '</tr>';
                }
                
            
            ?>
        </tbody>
    </table>

    <h3><a href="form_add_wine.php">Ajouter un vin</a></h3>
    
</body>
</html>