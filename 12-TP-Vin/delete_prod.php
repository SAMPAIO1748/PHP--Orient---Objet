<?php 

$bdd = new PDO ('mysql:host=localhost;dbname=winej2', 'root', 'root');
$sql = "DELETE FROM producer WHERE id = :id";
$requete = $bdd->prepare($sql);
$requete->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
$requete->execute();

header('Location: producers.php');