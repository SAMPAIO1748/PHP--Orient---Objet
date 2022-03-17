<?php

$bdd = new PDO('mysql:host=localhost;dbname=bibliotheque', 'root', 'root');

$sql = "INSERT INTO genre (libelle) VALUES (:libelle)";

$requete = $bdd->prepare($sql);

$requete->bindValue(':libelle', $_POST['libelle'], PDO::PARAM_STR);

$requete->execute();

header('Location: list_genre.php');
