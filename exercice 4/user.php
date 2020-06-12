<?php
if(isset($_POST['firstname']) && isset($_POST['lastname'])){
    $firstanme = htmlspecialchars($_POST['firstname']);
    $lastanme = htmlspecialchars($_POST['lastname']);
    echo  $firstanme.' '. $lastanme; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user</title>
</head>
<body>
    
</body>
</html>