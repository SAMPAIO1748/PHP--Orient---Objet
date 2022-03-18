<?php

$id = $_GET['id'];

$bdd = new PDO("mysql:host=localhost;dbname=bibliotheque", "root", "root"); // Connexion à la bdd

$sql = "DELETE FROM creation WHERE id = :id"; // Requête SQL

$requete = $bdd->prepare($sql); // préparation de la requête

$requete->bindValue(":id", $id, PDO::PARAM_INT); // Affectation de la valeur à la varibale :id

$requete->execute(); // Exécution de la requête

header('Location: list_creation.php'); // Redirection vers la page list_creation.php
