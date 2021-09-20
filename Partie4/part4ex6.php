<?php 
    $counter = 1;
?>
<!DOCTYPE html>
<html lang="fr">
    <?php require_once('assets\parts\head.php') ?>
<body>
    <?php require_once('assets\parts\barnav.php') ?>
    <h1>Exercice 6</h1>

    <h2>Solution 1 avec une boucle while : </h2>

    <?php 
    // Tant que counter est inférieur à 100
        while($counter <= 100) {
        // Si counter est un multiple de 3 et de 5 
            if ($counter %3 == 0 && $counter % 5 == 0) { ?>
        <!-- On affiche FizzBuzz -->
                <p>FizzBuzz</p>
        <!-- Sinon si counter est un multiple de 3  -->
            <?php }else if ($counter % 3 == 0) { ?>
        <!-- On affiche Fizz -->
                <p>Fizz</p>
        <!-- Sinon si counter est un multiple de 5 -->
            <?php }else if ($counter % 5 == 0) { ?>
        <!-- On affiche Buzz -->
                <p>Buzz</p>
        <!-- Sinon on affiche le nombre de counter -->
            <?php }else{ ?>
                <p> <?php echo $counter; ?></p>
            <?php }
        // Incrémentation de counter de 1 en 1
            $counter++;
        }
    ?>

    <h2>Solution 2 avec boucle for : </h2>

    <?php 
        for ($counter2 = 1; $counter2 <= 100; $counter2++){
            // Si counter est un multiple de 3 et de 5 
            if ($counter2 %3 == 0 && $counter2 % 5 == 0) { ?>
                <!-- On affiche FizzBuzz -->
                        <p>FizzBuzz</p>
                <!-- Sinon si counter est un multiple de 3  -->
                    <?php }else if ($counter2 % 3 == 0) { ?>
                <!-- On affiche Fizz -->
                        <p>Fizz</p>
                <!-- Sinon si counter est un multiple de 5 -->
                    <?php }else if ($counter2 % 5 == 0) { ?>
                <!-- On affiche Buzz -->
                        <p>Buzz</p>
                <!-- Sinon on affiche le nombre de counter -->
                    <?php }else{ ?>
                        <p> <?php echo $counter2; ?></p>
                    <?php }
        }
    ?>


<?php require_once('assets\parts\footer.php') ?>

</body>
</html>