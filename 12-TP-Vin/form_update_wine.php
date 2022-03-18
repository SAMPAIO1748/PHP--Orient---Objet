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
    
        $bdd = new PDO ('mysql:host=localhost;dbname=winej2', 'root', 'root');
        $sql_type = "SELECT * FROM type_wine";
        $requete_type = $bdd->prepare($sql_type);
        $requete_type->execute();

        $resultat_type = $requete_type->fetchAll(PDO::FETCH_ASSOC);

        $sql_producer = "SELECT * FROM producer";
        $requete_producer = $bdd->prepare($sql_producer);
        $requete_producer->execute();

        $resultat_producer = $requete_producer->fetchAll(PDO::FETCH_ASSOC);

        $sql_wine = "SELECT * FROM wine WHERE id = :id";
        $requete_wine = $bdd->prepare($sql_wine);
        $requete_wine->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
        $requete_wine->execute();

        $resultat_wine = $requete_wine->fetch(PDO::FETCH_ASSOC);
    
    ?>

<h1> <a href="list_wine.php">Vins</a></h1>

    <div class="menu">
        <h2><a href="types.php">Types de vin</a></h2>
        <h2><a href="users.php">Utilisateurs</a></h2>
        <h2><a href="producers.php">Producteurs de vin</a></h2>
    </div>

    <form action="update_wine.php" method="post" enctype="multipart/form-data">
        <div class="input dnone">
            <input type="text" name="id" id="id" value="<?php echo $resultat_wine['id'] ?>">
        </div>
        <div class="input">
            <label for="name">Nom</label>
            <input type="text" name="name" id="name" value="<?php echo $resultat_wine['name'] ?>">
        </div>
        <div class="input">
            <label for="description">Description</label>
            <input type="text" name="description" id="description" value="<?php echo $resultat_wine['description'] ?>">
        </div>
        <div class="input">
            <label for="appelation">Appelation</label>
            <input type="text" name="appelation" id="appelation" value="<?php echo $resultat_wine['appelation'] ?>">
        </div>
        <div class="input">
            <label for="type">Type</label>
            <select name="type" id="type">
                <?php 
                
                    foreach($resultat_type as $type){
                        if($resultat_wine['id_type_wine'] == $type['id']){
                            echo '<option value="' . $type['id'] .'" selected>' . $type['name'] . '</option>';
                        }else{
                            echo '<option value="' . $type['id'] .'">' . $type['name'] . '</option>';
                        }
                        
                    }
                
                ?>
            </select>
        </div>
        <div class="input">
            <label for="producer">Producteur</label>
            <select name="producer" id="producer">
                <?php 
                
                    foreach($resultat_producer as $producer){
                        if($resultat_wine['id_producer'] == $producer['id']){
                            echo '<option value="' . $producer['id'] .'" selected>' . $producer['name'] . '</option>';
                        }else{
                            echo '<option value="' . $producer['id'] .'">' . $producer['name'] . '</option>';
                        }
                        
                    }
                
                ?>
            </select>
        </div>
        <div class="input">
            <input type="submit" value="Modifier">
        </div>
        
    </form>
    
</body>
</html>