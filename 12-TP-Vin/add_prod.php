<?php

    $bdd = new PDO ('mysql:host=localhost;dbname=winej2', 'root', 'root');
    $sql = "INSERT INTO producer (name, address, zipcode, city) VALUES (:name, :adress, :zipcode, :city)";
    $requete = $bdd->prepare($sql);
    $requete->bindValue(':name', $_POST['name'], PDO::PARAM_STR);
    $requete->bindValue(':adress', $_POST['adress'], PDO::PARAM_STR);
    $requete->bindValue(':zipcode', $_POST['zipcode'], PDO::PARAM_INT);
    $requete->bindValue(':city', $_POST['city'], PDO::PARAM_STR);
    $requete->execute();

    header('Location: producers.php');