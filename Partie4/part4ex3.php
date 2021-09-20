<?php
    function comparison($number1, $number2)
    {
        
        if($number1 > $number2){ 
            $output = 'Le nombre 1 est plus grand.';
        }else if($number1 < $number2){ 
            $output = 'Le nombre 1 est plus petit.';
        }else{ 
            $output = 'Les deux nombres sont identiques.';
        }
        return $output;
    };
    ?>



<!DOCTYPE html>
<html lang="fr">
<?php require_once('assets\parts\head.php') ?>
<body>
<?php require_once('assets\parts\barnav.php') ?>
<h1>Exercice 3</h1>

<p><?php echo comparison(24, 24); ?></p>

<?php require_once('assets\parts\footer.php') ?>

</body>
</html>