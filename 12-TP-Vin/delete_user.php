<?php

    $bdd = new PDO ('mysql:host=localhost;dbname=winej2', 'root', 'root');
    $sql = "DELETE FROM user WHERE id = :id";
    $req = $bdd->prepare($sql);
    $req->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
    $req->execute();
    
    header('Location: ' . $_SERVER['HTTP_REFERER']);

?>