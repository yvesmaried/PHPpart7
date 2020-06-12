<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo 3</title>
</head>

<body>
    <h1>exercice 3</h1>
    <p>Avec le formulaire de l'exercice 1, afficher dans la page user.php les données du formulaire transmis.</p>

    <form action="user.php" method="get">
        <label for="lastname">Votre nom :</label>
        <p><input type="text" id="lastname" name="lastname" pattern="[a-zA-Z+]" required></p>
        <label for="lfirstname">Votre prénom : </label>
        <p><input type="text" id="firstname" name="firstname" pattern="[a-zA-Z+]" required></p>
        <p><input type="submit" href="user.php" value="OK"></p>

    </form>

</body>

</html>