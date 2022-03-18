<?php

    session_start();

    if(empty($_POST['phone'])){
        $_POST['phone'] = NULL;
    }
    if(empty($_POST['adress'])){
        $_POST['adress'] = NULL;
    }
    if(empty($_POST['zipcode'])){
        $_POST['zipcode'] = NULL;
    }
    if(empty($_POST['ville'])){
        $_POST['ville'] = NULL;
    }
    if(empty($_POST['age'])){
        $_POST['age'] = NULL;
    }


    if(empty($_POST['name']) && empty($_POST['firstname']) && empty($_POST['mail'])){
        $message = "Les champs nom, prénom et email sont obligatoires";
    }elseif(empty($_POST['name']) && empty($_POST['firstname'])){
        $message = "Les champs nom, prénom sont obligatoires";
    }elseif(empty($_POST['name']) && empty($_POST['mail'])){
        $message = "Les champs nom et email sont obligatoires";
    }elseif(empty($_POST['firstname']) && empty($_POST['mail'])){
        $message = "Les champs prénom et email sont obligatoires";
    }elseif(empty($_POST['name'])){
        $message = "Le champs nom est obligatoire";
    }elseif(empty($_POST['firstname'])){
        $message = "Le champs prénom est obligatoire";
    }elseif(empty($_POST['mail'])){
        $message = "Le champs email est obligatoire";
    }else{
        $bdd = new PDO ('mysql:host=localhost;dbname=winej2', 'root', 'root');
        $sql = 'INSERT INTO user (name, firstname, mail, phone, adress, zipcode, ville, age, id_profile)
        VALUES (:name, :firstname, :mail, :phone, :adress, :zipcode, :ville, :age, 2)';
        $requete = $bdd->prepare($sql);
        $requete->bindValue(':name', $_POST['name'], PDO::PARAM_STR);
        $requete->bindValue(':firstname', $_POST['firstname'], PDO::PARAM_STR);
        $requete->bindValue(':mail', $_POST['mail'], PDO::PARAM_STR);
        $requete->bindValue(':phone', $_POST['phone'], PDO::PARAM_STR);
        $requete->bindValue(':adress', $_POST['adress'], PDO::PARAM_STR);
        $requete->bindValue(':zipcode', $_POST['zipcode'], PDO::PARAM_INT);
        $requete->bindValue(':ville', $_POST['city'], PDO::PARAM_STR);
        $requete->bindValue(':age', $_POST['age'], PDO::PARAM_INT);

        $requete->execute();

        $message = "Vous êtes inscrit";

        $_SESSION['name'] = $_POST['name'];
        $_SESSION['firstname'] = $_POST['firstname'];
        

    }

    echo $message;

    ?>

    <a href="count_form.php">Retour au formulaire</a>
    <a href="list.php">Vins</a>