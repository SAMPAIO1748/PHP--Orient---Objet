<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Ajouter une création</h1>

    <form action="create_creation.php" method="post">

        <label for="titre">Titre</label>
        <input type="text" name="titre" id="titre">

        <label for="description">Description</label>
        <input type="text" name="description" id="description">

        <label for="galerie">Gallerie</label>
        <input type="text" name="galerie" id="galerie">

        <input type="submit" value="Enregistrer">

    </form>

</body>

</html>