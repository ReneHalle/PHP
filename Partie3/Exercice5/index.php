    <?php 
        $departments = array(
            '60' => 'Oise',
            '80' => 'Somme',
            '02' => 'Aisne',
            '62' => 'Pas-de-Calais',
            '59' => 'Nord');
    ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5</title>
</head>
<body>
    <p>
        <?php 
        // afficher le tableau avec foreach pr tableau assiociatif
        foreach($departments as $element){
            echo $element . ' ';
        }
        ?>
    </p>
    <a href="http://php-partie3/"><button>Retour au menu</button></a>
</body>
</html>