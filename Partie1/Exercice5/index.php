<?php
    $answer = 'toto';
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
    <p>Si la réponse est 'yes' afficher le message 'Vous avez répondu 'oui'.'. Sinon afficher 'Vous avez
répondu 'non'.'.
<h1>Version 1 (pas propre) :</h1>
<p>
<?php
    if($answer == 'yes')
    echo 'Vous avez répondu oui.';
    else if ($answer == 'no')
    echo 'Vous avez répondu non.';
    else
    echo 'Vous avez répondu autre chose.';
?>
</p>

<h2>Solution 2 (propre) : </h2>
<p>
    <?php if ($answer == 'yes') { ?>
    <p>Vous avez répondu oui.</p>
    <?php } else if ($answer == 'no') { ?>
    <p>Vous avez répondu non.</p>
    <?php } else { ?>
    <p>Vous avez répondu autre chose.</p>
    <?php } ?>
</body>
</html>