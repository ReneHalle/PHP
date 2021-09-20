<?php
    $number = 140;
    $number2 = 140;
    ($number2 += 30)/2;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 6</title>
</head>
<body>
    <h1>Solution 1 (en une ligne) : </h1>
    <p>Nombre : <?=($number+30)/2;?></p>
    <h2>Solution détaillé</h2>
    <p><?php echo $number ?>+30 = <?php $number += 30; echo $number ?></p>
    <p><?php echo $number ?> ÷ 2 = <?php $number /= 2; echo $number ?></p>
    <h2>Solution en une ligne (2) : </h2>
    <p>Nombre : <?=$number2;?></p>

</body>
</html>