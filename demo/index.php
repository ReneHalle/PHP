<?php 
// Initialisation de la variable lastName(= déclaration + attribution variable)
$lastName = 'DUPONT' 
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo php</title>
</head>
<body>
    <h1>Démo PHP</h1>
    <p>Prénom : 
    <?php 
    // COmmentaire une ligne
    /*Commentaire
    sur plusieur lignes*/


    // Déclaration d'une variable
    $variableName;
    // Déclaration variable et attribution d'une valeur (Initialisation)
    $firstName = 'Jean';
    // Attribution d'une valeur à $variableName
    $variableName = 12;

    // Affichage de $firstName
    echo $firstName;
    echo $variableName;
    ?>
    </p>

    <p>Nom : <?php echo $lastName; ?></p>
    <!-- les deux sont pareils -->
    <p>Nom : <?= $lastName; ?></p>
    <!-- On voit directement tout écrit mot pour mot -->
    <p><?php echo 'Votre nom est $lastName';?></p>
    <!-- On voit la variable lastname -->
    <p><?php echo "Votre nom est $lastName";?></p>

<!-- affichage variable -->
</body>
</html>