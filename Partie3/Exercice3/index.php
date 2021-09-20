    <?php
            // Création d'un tableau mois avec janvier comme valeur 0
    $months = array('janvier','février','mars','avril','mai','juin','juillet','août','septembre','octobre','novembre','décembre');
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
    <!---- Solution 1 ---->
    <p>
    <?php
    // Puis on fait une boucle for pour tout afficher :
    // for (point de départ; condition d'arrivée; incrémentation)
    // Pour $key allant de 0 à 12 en 1 en 1, on affiche le mois
    for ($key = 0; $key < 12; $key++){
    // Affiche les mois : 
        echo $months[$key];
        ?>
        <br>
        <?php } ?>
    </p>
<!---- Solution 1 améliorée ---->
    <?php for ($numero = 0; $numero < 12; $numero++){ ?>
        <p><?php echo $months[$numero]; ?></p>
        <?php } ?>

    <h2>Boucle for each</h2>
    <!-- Solution 2 -->
    <?php 
    // Pour chaque mois du tableau months, on affiche le mois
    // foreach (nom du tableau as variable)
    // On choisit le nom de la variable
    foreach ($months as $month) { ?>
    <p><?php echo $month; ?></p>
    <?php } ?>


    <h2>Solution 3 avec la boucle while</h2>
    <!-- Solution 3 avec la boucle while -->
    <p>
    <?php 
    // Initialisation de la variable index à 0 (point de départ)
    $index = 0;
    // Tant que index est inférieur ou égale à 0, on affiche le mois dont l'index est x
    // while (condition d'arrivée)
    while ($index <= 11) {
        // Affichage du mois
        echo $months[$index] . ' ';
        // Incrémentation
        $index++; 
} ?>
    </p>
    <a href="http://php-partie3/"><button>Retour au menu</button></a>
</body>
</html>