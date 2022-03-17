<?php

$bdd = new PDO('mysql:host=localhost;dbname=bibliotheque', 'root', 'root'); // Connexion à la BDD.

$sql = "INSERT INTO creation (titre, description, galerie, date_creation) VALUES (:titre, :description, :galerie, :date)"; // Requête SQL

$requete = $bdd->prepare($sql); // préparation de la requête

$requete->bindValue(':titre', $_POST['titre'], PDO::PARAM_STR); // Attribution de la valeur à la variable

$requete->bindValue(":description", $_POST['description'], PDO::PARAM_STR); // Attribution de la valeur à la variable

$requete->bindValue(':galerie', $_POST['galerie'], PDO::PARAM_STR); // Attribution de la valeur à la variable

$requete->bindValue(':date', date('Y-m-d'), PDO::PARAM_STR); // Attribution de la valeur à la variable

$requete->execute(); // Exécution de la requête

header('Location: list_creation.php'); // redirection vers la page list_creation.php

// Exercice faire le Create pour genre.
