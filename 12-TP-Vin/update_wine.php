<?php 



$bdd = new PDO ('mysql:host=localhost;dbname=winej2', 'root', 'root');
$sql = "UPDATE wine SET name = :name, description = :description, appelation = :appelation, id_type_wine = :type, id_producer = :producer WHERE wine.id = :id";
$requete = $bdd->prepare($sql);
$requete->bindValue(':name', $_POST['name'], PDO::PARAM_STR);
$requete->bindValue(':description', $_POST['description'], PDO::PARAM_STR);
$requete->bindValue(':appelation', $_POST['appelation'], PDO::PARAM_STR);
$requete->bindValue(':type', $_POST['type'], PDO::PARAM_INT);
$requete->bindValue(':producer', $_POST['producer'], PDO::PARAM_INT);
$requete->bindValue(':id', $_POST['id'], PDO::PARAM_INT);
$requete->execute();

header('Location: list_wine.php');