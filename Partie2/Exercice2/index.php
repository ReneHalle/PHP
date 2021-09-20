<?php
//Solution 1
// Initialisation des variables 'age' et 'gender (=déclaration + attribution de valeur)
$age = 22;
$gender = 'femme';

//Solution 2
$age2 = 22;
$gender2 = 'femme';

//Solution 3 (= solution 1 améliorée)
//Initialisation des variables age et gender
$age3 = 22;
$gender3 = 'femme';
//Initialisation de variables vides qui stockeront le texte à afficher ()
$ageReturn = '';
$genderReturn = '';

if ($age3 >= 18 && $age3 <= 120) {
    $ageReturn = 'majeur.e';
} else if ($age3 > 0 && $age3 < 18){
    $ageReturn = 'mineur.e';
} else {
    $ageReturn = 'soit mort.e, soit pas encore né.e';
}

if ($gender3 == 'femme') {
    $genderReturn = 'une femme';
} else if ($gender3 == 'homme'){
    $genderReturn = 'un homme';
} else {
    $genderReturn = 'd\'un genre indéterminé';
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        #contact{
            border: solid red 3px;
        }
    </style>
    <title>Php Partie 2</title>
</head>

<body>
    <h1>Exercice 2 P2 PHP</h1>
    <!-- Solution 1 -->
    <h2>Solution 1</h2>
    <p>Vous êtes
    <?php 
    // Affichage de la variable 'age' avec des conditions if et if else (selon si la valeur de la variable est > à 0 et < à 18, ou si la valeur de la variable est > ou = à 18)
    if ($age >= 18 && $age <= 120) { ?>
        majeur
        <?php  } else if ($age > 0 && $age < 18){ ?>
        mineur
        <?php  } else { ?>
        soit mort, soit pas encore né !
        <?php  } ?>
    et vous êtes
    <?php
    // Affichage de la variable 'gender' avec des conditions if et if else (selon si la valeur de la variable est 'homme' ou 'femme' ou tout autre valeur)
    if ($gender == 'femme') { ?>
        une femme
        <?php } else if ($gender == 'homme'){ ?>
        un homme
        <?php } else { ?>
        d'un genre indéterminé
        <?php } ?> 
    </p>
    <!-- Solution 2 -->
    <h2>Solution 2</h2>
    <?php 
    if ($age2 > 0 && $age2 <= 120){
        if ($gender2 == 'homme' && $age2 >= 18) {
        ?>
        <p> Vous êtes un homme majeur</p>
        <?php }else if ($gender2 == 'homme' && $age2 < 18) { ?>
            <p>Vous êtes un homme mineur</p>
        <?php }else if ($gender2 == 'femme' && $age2 >= 18) { ?>
            <p> Vous êtes une femme majeure </p>
        <?php }else if ($gender2 == 'femme' && $age2 < 18) { ?>
            <p> Vous êtes une femme mineure </p>
        <?php }else { ?>
            <p> Votre genre est indéterminé </p>
        <?php }
    }elseif ($gender2 != 'homme' && $gender2 != 'femme') { ?>
        <p>L'âge et le genre que vous avez renseigné ne sont pas corrects </p>
    <?php }else{ ?>
        <p>Age incorrect</p>
        <?php } ?>
        <!-- Solution 3 -->
        <h2>Solution 3</h2>
        <p>Vous êtes <?php echo $ageReturn; ?> et vous êtes <?= $genderReturn; ?>.</p>
        <?php require_once('contact.php'); ?>
        <?php include_once('contact.php'); ?>
</body>
</html>