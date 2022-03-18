<?php 

$host = mysqli_connect('localhost', 'root', 'root');
$bdd = mysqli_select_db($host, 'winej2');
$sql = "INSERT INTO type_wine (name) VALUES ('". $_POST['name'] ."')";
$requete = mysqli_query($host, $sql);

header("Location: types.php");