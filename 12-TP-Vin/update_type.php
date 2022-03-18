<?php 

$host = mysqli_connect('localhost', 'root', 'root');
$bdd = mysqli_select_db($host, 'winej2');
$sql = "UPDATE type_wine SET name = '" . $_POST['name'] . "' WHERE id = " . $_POST['id'] . "";
$requete = mysqli_query($host, $sql);

header('Location: types.php');

