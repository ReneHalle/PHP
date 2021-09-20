<?php
    function showFirstName($firstName)
    { 
        $greetings = 'Bonjour, ' . $firstName;
        return $greetings;
    }

    function calculSquareNumber($number)
    {
        $result = $number * $number;
        return $result;
    }
?>

<!DOCTYPE html>
<html lang="fr">
<?php require_once('assets\parts\head.php'); ?>
<body>
<?php require_once('assets\parts\barnav.php'); ?>
<h1>Exercice 1</h1>
<!-- Solution 1 -->
    <p><?php echo showFirstName('René'); ?></p>

    <!-- Solution 2 -->
    <p><?php $returnFirstName = showFirstName ('Ayka');
        echo $returnFirstName; ?>
    </p>



        <p><?php echo calculSquareNumber(125);?></p>
    <?php require_once('assets\parts\footer.php'); ?>
</body>
</html>