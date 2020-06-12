<?php
if(isset($_GET['firstname']) && isset($_GET['lastname'])){
    $firstanme = htmlspecialchars($_GET['firstname']);
    $lastanme = htmlspecialchars($_GET['lastname']);
    echo  $firstanme.' '. $lastanme; 
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user</title>
</head>
<body>
    
</body>
</html>