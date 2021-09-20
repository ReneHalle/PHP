<?php 
    $age = 22;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1</title>
</head>
<body>
    <p>
    <?php if ($age >=18 && $age <= 110 ){ ?>
    <p>Vous êtes majeur</p>
    <?php } else if ($age >0 && $age < 18 ){ ?>
    <p>Vous êtes mineur</p>
    <?php } else { ?>
    <p>Âge non valide</p>
    <?php } ?>
    </p>

    <a href="http://php-partie2/"><button>Retour au menu</button></a>

</body>
</html>