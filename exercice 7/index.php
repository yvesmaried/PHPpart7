<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo 7</title>
</head>

<body>
    <h1>exercice 7</h1>

    <p>Au formulaire de l'exercice 5, ajouter un champ d'envoi de fichier. Afficher en plus de ce qui est demandé à
        l'exercice 6, le nom et l'extension du fichier.</p>

    <form enctype="multipart/form-data" action="index.php" method="post">

        <p>Votre nom : <input type="text" name="lastname" /></p>

        <p>Votre prénom : <input type="text" name="firstname" /></p>

        <label for="gender">Civilité:</label>

        <select name="gender" id="gender">

            <option value="">Veuillez indiquer votre civilité :</option>
            <option value="male">Mr.</option>
            <option value="female">Mme.</option>

        </select>
        <p>
            <input type="hidden" name="MAX_FILE_SIZE" value="100000">
            Fichier : <input type="file" name="avatar">
            <input type="submit" name="envoyer" value="Envoyer le fichier">
        </p>
        <p><input type="submit" value="ok"></p>
    </form>

    <?php
   
    if (isset($_GET['firstname']) AND isset($_GET['lastname']) AND isset($_GET['gender'])) {
    
        strip_tags($_GET['firstname']) .'<br>'.  strip_tags($_GET['lastname']) .'<br>'. strip_tags($_GET['gender']);
    }
    else 
    {
        echo 'les champs ne sont pas remplis';
    }

    ?>

</body>

</html>