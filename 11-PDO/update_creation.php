<?php

$id = $_POST['id'];
$titre = $_POST['titre'];
$description = $_POST['description'];
$galerie = $_POST['galerie'];

$bdd = new PDO("mysql:host=localhost;dbname=bibliotheque", "root", "root"); // connexion à la bdd

$sql = "UPDATE creation SET titre = :titre, description = :description, galerie = :galerie WHERE id = :id"; // requête SQL

$requete = $bdd->prepare($sql); // Préparation de la requête

$requete->bindValue(':titre', $titre, PDO::PARAM_STR); // Attribution de la valeur à la variable
$requete->bindValue(':description', $description, PDO::PARAM_STR); // Attribution de la valeur à la variable
$requete->bindValue(':galerie', $galerie, PDO::PARAM_STR); // Attribution de la valeur à la variable
$requete->bindValue(':id', $id, PDO::PARAM_INT); // Attribution de la valeur à la variable

$requete->execute();

header("Location: list_creation.php");
