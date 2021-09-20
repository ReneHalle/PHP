<?php 
$lastName = 'Hallé';
$firstName = 'René';
$age = 22;
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2</title>
</head>
<body>
    <p>Nom : 
        <?= $lastName;?>
    </p>
    <p>Prénom : 
        <?= $firstName;?>
    </p>
    <p>Âge : 
        <?= $age;?>
    </p>
    <p>Je m'appelle : <?=$firstName?> <?=$lastName?> et j'ai <?=$age?> ans.</p>
</body>
</html>