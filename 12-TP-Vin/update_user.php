<?php 

    $bdd = new PDO ('mysql:host=localhost;dbname=winej2', 'root', 'root');
    $sql = 'UPDATE user SET name = :name, firstname = :firstname, mail = :mail, phone = :phone,
     adress = :adress, zipcode = :zipcode, ville = :ville, age = :age WHERE id = :id';

    $req = $bdd->prepare($sql);
    $req->bindValue(':name', $_POST['name'], PDO::PARAM_STR);
    $req->bindValue(':firstname', $_POST['firstname'], PDO::PARAM_STR);
    $req->bindValue(':mail', $_POST['mail'], PDO::PARAM_STR);
    $req->bindValue(':phone', $_POST['phone'], PDO::PARAM_STR);
    $req->bindValue(':phone', $_POST['phone'], PDO::PARAM_STR);
    $req->bindValue(':adress', $_POST['adress'], PDO::PARAM_STR);
    $req->bindValue(':zipcode', $_POST['zipcode'], PDO::PARAM_INT);
    $req->bindValue(':ville', $_POST['ville'], PDO::PARAM_STR);
    $req->bindValue(':age', $_POST['age'], PDO::PARAM_INT);
    $req->bindValue(':id', $_POST['id'], PDO::PARAM_INT);

    $req->execute();
    header('Location: users.php');


?>