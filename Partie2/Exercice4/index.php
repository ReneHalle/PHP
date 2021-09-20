<?php 
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
    <?php 
        if($age >=18){ ?>
        <p> Tu es majeur</p>
        <?php } else { ?>
        <p> Tu n'es pas majeur</p>
        <?php } ?>
    <a href="http://php-partie2/"><button>Retour au menu</button></a>
</body>
</html>