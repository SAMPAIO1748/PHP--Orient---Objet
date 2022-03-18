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
    <h1> <a href="list.php">Vins</a></h1>
    <div class="menu">
        <h2><a href="types.php">Types de vin</a></h2>
        <h2><a href="users.php">Utilisateurs</a></h2>
        <h2><a href="producers.php">Producteurs de vin</a></h2>
    </div>
    <h2 class="title">Producteurs de vin</h2>

    <?php 
    
        $bdd = new PDO ('mysql:host=localhost;dbname=winej2', 'root', 'root');
        $sql = "SELECT * FROM producer";
        $requete = $bdd->prepare($sql);
        $requete->execute();

        $resultat = $requete->fetchAll(PDO::FETCH_ASSOC);
    
    ?>

    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Adresse</th>
                <th>Code Postal</th>
                <th>Ville</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
        </thead>
        <tbody>
            <?php 

                foreach($resultat as $producer){
                    echo '<tr><td><a href="producer.php?id=' . $producer['id'] . '">' . $producer['name'] . 
                    '</a></td><td>' . $producer['address'] . 
                    '</td><td>' . $producer['zipcode'] . 
                    '</td><td>' . $producer['city'] . 
                    '</td><td><a href="form_update_prod.php?id=' . $producer['id'] .'">Modifier le producteur</a></td>
                    <td><a href="delete_prod.php?id=' .$producer['id'] . '">Supprimer le producteur</a></td></tr>';
                }

            ?>
        </tbody>
    </table>
    <h3><a href="form_add_prod.php">Ajouter un producteur</a></h3>
</body>
</html>