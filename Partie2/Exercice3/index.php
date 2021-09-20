<?php 
    $gender = 'femme';
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
    <!-- C'est une ternaire, pratique pour les formulaire -->
     <!-- != => Différent de "homme" -->
    <?php 
    if($gender !='homme'){ ?>
        <p>C'est une développeuse</p> 
    <?php } else{ ?>
        <p> C'est une développeur</p>
    <?php } ?>
    <a href="http://php-partie2/"><button>Retour au menu</button></a>
</body>
</html>