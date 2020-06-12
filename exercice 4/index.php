<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo 4</title>
</head>

<body>
    <h1>exercice 4</h1>
    <p>Créer un formulaire demandant le nom et le prénom. Ce formulaire doit rediriger vers la page user.php avec la méthode POST.</p>

    <form action="user.php" method="post">
        <label for="lastname">Votre nom :</label>
        <p><input type="text" id="lastname" name="lastname" pattern="[a-zA-Z+]" required></p>
        <label for="firstname">Votre prénom : </label>
        <p><input type="text" id="firstname" name="firstname" pattern="[a-zA-Z+]" required></p>
        <p><input type="submit" value="OK"></p>

    </form>

</body>

</html>