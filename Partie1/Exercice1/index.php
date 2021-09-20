<?php 
$object = 'Objet du message: ';
$message = 'Bienvenue dans la faille de l\'invocateur !'
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
    <!-- afficher ma variable -->
<p><?= $object;?>
    <?= $message; ?>
</p>
</body>
</html>