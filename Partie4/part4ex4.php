<?php 
    function profile($lastName,$firstName,$age)
    {
        $greetings = 'Bonjour, ' . $lastName. ' ' . $firstName . ', tu as ' . $age . ' ans.';
        return $greetings;
    }

    function profile2($lastName,$firstName,$age)
    {
                // solution 2 
                $greetings2 = "Bonjour $lastName $firstName, tu as $age ans.";
                return $greetings2;
    }

?>


<!DOCTYPE html>
<html lang="fr">
<?php require_once('assets\parts\head.php') ?>
<body>
    <?php require_once('assets\parts\barnav.php') ?>
    <h1>Exercice 4</h1>

    <p><?php $profile = profile('Hallé', 'René', 22);
        echo $profile; ?>
    </p>
    <p><?php $profile2 = profile2('Mousy', 'Ayka', 22);
        echo $profile2; ?>
    </p>

    <?php require_once('assets\parts\footer.php') ?>
</body>
</html>