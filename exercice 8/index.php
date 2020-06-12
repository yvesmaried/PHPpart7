<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo 8</title>
</head>

<body>
    <h1>exercice 8</h1>

    <p>Sur le formulaire de l'exercice 6, en plus de ce qui est demandé sur les exercices précédent, vérifier que le fichier transmis est bien un fichier pdf.</p>

    
<?php if (isset($_POST['gender']) AND isset($_POST['firstname']) AND isset($_POST['lastname'])) { 
        $extension = substr($_FILES['file']['name'], -3, 3);
    ?>
        <?php if ($extension != "pdf") { ?>
            <p><?= "Veuillez saisir un fichier au format pdf" ?></p>
        <?php } else { ?>
            <p><?= strip_tags($_POST['firstname']) . " <br> " . strip_tags($_POST['lastname']) . " <br> " . strip_tags($_POST['gender']) . " <br> " . $_FILES['file']['name'] ?></p>
        <?php } ?>

<?php } else { ?>

    <form enctype="multipart/form-data" action="index.php" method="post">

        <p>Votre nom : <input type="text" name="lastname" /></p>

        <p>Votre prénom : <input type="text" name="firstname" /></p>

        <label for="gender">Civilité : </label>

        <select name="gender" id="gender">

            <option value="">Veuillez indiquer votre civilité : </option>
            <option value="male">Mr.</option>
            <option value="female">Mme.</option>

        </select>
        <p>
            <input type="hidden" name="MAX_FILE_SIZE" value="100000">
            Votre fichier : <input type="file" name="userfile">
            <input type="submit" name="envoyer" value="Envoyer le fichier">
        </p>
        <p><input type="submit" value="Envoyer le fichier"></p>
    </form>

    <?php 
    } 
    ?> 

</body>

</html>