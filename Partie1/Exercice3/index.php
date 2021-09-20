<?php 
$km=1;
$km1 = 1;
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3</title>
</head>
<body>
    <h1>Créer une variable km. L'initialiser à 1. Afficher son contenu. Changer sa valeur par 3. Afficher son contenu. Changer sa valeur par 125. Afficher son contenu.</h1>
    <h2>Solution 1 (pas la bonne) : </h1>
    <p>km : <?=$km1;?></p>
    <p>km : <?=$km1+=2;?></p>
    <p>km : <?=$km1+=122;?></p>

    <h2>Solution 2 (bonne solution) : </h2>
    
    <p>km : <?=$km;?></p>
    <p>km : <?=$km = 3?></p>
    <p>km : <?=$km = 125?></p>

    <h2>Solution 3 (la meilleure solution) :</h2>
    <p>km : <?php $km=1; echo $km;?></p>
    <p>km : <?php $km = 3; echo $km;?></p>
    <p>km : <?php $km = 125; echo $km;?></p>

    <h2>Solution 4 (concaténation avec affectation) : </h2>
    <?php 
        $km = 1;
        $km = $km . ',' . 3;
        $km = $km . ',' . 125;
    ?>
    <p><?=$km;?></p>
    <h2>Solution 4 (concaténation avec affectation version courte) : </h2>
    <?php 
        $km = 1;
        $km .= ',' . 3;
        $km .= ',' . 125;
    ?>
    <p><?=$km;?></p>
</body>
</html>