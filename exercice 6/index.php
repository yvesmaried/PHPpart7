<?php
$showForm = true;
if (isset($_POST['firstname']) and isset($_POST['lastname']) and isset($_POST['gender'])) {
    $dhowForm = false;
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo 6</title>
</head>

<body>
    <h1>exercice 6</h1>

    <p>Avec le formulaire de l'exercice 5, Si des données sont passées en GET ou en POST, le formulaire ne doit pas être affiché. Par contre</p>
    <p>les données transmises doivent l'être. Dans le cas contraire, c'est l'inverse.</p>
    <p>N'utiliser qu'une seule page.</p>
    <?php
    if (!$showFrom) {

        $message = $_POST['firstname'] . '<br>' . $_POST['lastname'] . '<br>' . $_POST['gender'];
        
    } else {
    ?>

    <form action="index.php" method="post">

        <p>Votre nom : <input type="text" name="lastname" /></p>

        <p>Votre prénom : <input type="text" name="firstname" /></p>

        <label for="gender">Civilité:</label>

        <select name="gender" id="gender">

            <option value="">Veuillez indiquer votre civilité :</option>
            <option value="male">Mr.</option>
            <option value="female">Mme.</option>

        </select>

        <p><input type="submit" value="ok"></p>
    </form>
<?php
}
?>

</body>

</html>