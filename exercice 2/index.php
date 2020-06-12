<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo 2</title>
</head>

<body>
    <h1>exercice 2</h1>
    <p>Créer un formulaire demandant le nom et le prénom. Ce formulaire doit rediriger vers la page user.php avec la méthode POST.</p>

    <form action="user.php" method="post">
        <p>Votre nom : <input type="text" name="lastname" /></p>
        <p>Votre prénom : <input type="text" name="firstname" /></p>
        <p><input type="submit" href="user.php" value="OK"></p>

    </form>

</body>

</html>