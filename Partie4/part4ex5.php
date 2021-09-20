<?php 
    $counter = 0;
?>
<!DOCTYPE html>
<html lang="fr">
<?php require_once('assets\parts\head.php') ?>
<body>
<?php require_once('assets\parts\barnav.php') ?>
    <h1>Exercice 5</h1>
    <h2>Solution 1</h2>
    <?php 
            // Tant que counter est inférieur à 300
        while ($counter <= 300){
            // Si counter est un nombre impair (%2 !=0 ====> Reste de la division/2 est différent de 0 )
            if ($counter % 2 != 0){ ?>
                <p><?php echo $counter ;?></p>
            <?php }
        // Incrémentation  + 1 du counter avec $counter++
        $counter++;
        }
    ?>

    <h2>Solution 2</h2>

    <?php
    //Pour un nombre, de 0 à 300 allant de 1 en 1 
        for ($counter2 = 0; $counter2 <=300; $counter2++){
            if ($counter2 % 2 != 0){ ?>
                <p><?php echo $counter2 ;?></p>
            <?php }
        } ?>


<?php require_once('assets\parts\footer.php') ?>

</body>
</html>