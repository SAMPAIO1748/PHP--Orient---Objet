<?php 

$host = mysqli_connect('localhost', 'root', 'root');
$bdd = mysqli_select_db($host, 'winej2');
$sql = "DELETE FROM type_wine WHERE id = " . $_GET['id'] . "";
$requete = mysqli_query($host, $sql);

header('Location: types.php');