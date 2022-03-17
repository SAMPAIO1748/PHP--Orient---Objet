<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    $id = $_GET['id'];

    $bdd = new PDO('mysql:host=localhost;dbname=bibliotheque', 'root', 'root');

    $sql = "SELECT * FROM creation WHERE id = :id";

    $requete = $bdd->prepare($sql);

    $requete->bindValue(':id', $id, PDO::PARAM_INT);

    $requete->execute();

    $resultat = $requete->fetch(PDO::FETCH_ASSOC);

    //var_dump($resultat);

    ?>

    <form action="update_creation.php" method="post">

        <input type="number" name="id" value="<?php echo $resultat['id'] ?>" class="dn">

        <label for="titre">Titre</label>
        <input type="text" name="titre" id="titre" value="<?php echo $resultat['titre'] ?>">

        <label for="description">Description</label>
        <input type="text" name="description" id="description" value="<?php echo $resultat['description'] ?>">

        <label for="galerie">Gallerie</label>
        <input type="text" name="galerie" id="galerie" value="<?php echo $resultat['galerie'] ?>">

        <input type="submit" value="Enregistrer">

    </form>

    <style>
        .dn {
            display: none;
        }
    </style>

</body>

</html>