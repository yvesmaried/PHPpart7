<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo 5</title>
</head>

<body>
    <h1>exercice 5</h1>

    <p>Créer un formulaire sur la page index.php avec :</p>
    <ul>
        <li>Une liste déroulante pour la civilité (Mr ou Mme)</li>
        <li>Un champ texte pour le nom</li>
        <li>Un champ texte pour le prénom</li>
    </ul>

    <p>Ce formulaire doit rediriger vers la page index.php.</p>
    <p>Vous avez le choix de la méthode.</p>

    <form action="index.php" method="get">

        <p>Votre nom : <input type="text" name="lastname" /></p>

        <p>Votre prénom : <input type="text" name="firstname" /></p>

        <label for="gender">Civilité:</label>

        <select name="gender" id="gender">

            <option value="" disabled selected>Veuillez indiquer votre civilité :</option>
            <option value="Mr.">Mr.</option>
            <option value="Mme.">Mme.</option>

        </select>

        <p><input type="submit" value="ok"></p>
    </form>

    <?php
   
    if (isset($_GET['firstname']) AND isset($_GET['lastname']) AND isset($_GET['gender'])) 
    {
        echo $_GET['lastname'].' '. $_GET['firstname'].' '. $_GET['gender'];
    }
    else 
    {
        echo 'les champs ne sont pas remplis';
    }

    ?> 


</body>

</html>