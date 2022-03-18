<?php 

session_start();

$bdd = new PDO ('mysql:host=localhost;dbname=winej2', 'root', 'root');
$sql = "SELECT * FROM user WHERE name = :name AND mail = :mail";
$requete = $bdd->prepare($sql);
$requete->bindValue(':name', $_POST['name'], PDO::PARAM_STR);
$requete->bindVAlue(':mail', $_POST['mail'], PDO::PARAM_STR);
$requete->execute();

$resultat = $requete->fetch(PDO::FETCH_ASSOC);

if($resultat){
    $_SESSION['name'] = $resultat['name'];
    $_SESSION['firstname'] = $resultat['firstname'];
    header('Location: list.php');
}else{
    header('Location: login_form.php');
}