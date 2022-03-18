<?php 

$bdd  = new PDO ('mysql:host=localhost;dbname=winej2', 'root', 'root');
$sql = "UPDATE producer SET name = :name, address = :adress, zipcode = :zipcode, city = :city WHERE id = :id";
$requete = $bdd->prepare($sql);
$requete->bindValue(':name', $_POST['name'], PDO::PARAM_STR);
$requete->bindValue(':adress', $_POST['adress'], PDO::PARAM_STR);
$requete->bindValue(':zipcode', $_POST['zipcode'], PDO::PARAM_INT);
$requete->bindValue(':city', $_POST['city'], PDO::PARAM_STR);
$requete->bindValue(':id', $_POST['id'], PDO::PARAM_INT);
$requete->execute();

var_dump($requete);

header('Location: producers.php');
