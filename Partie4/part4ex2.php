<?php
// Déclaration de la fonction showName qui prend deux paramètres (lastName et firstName)
    function showName($lastName, $firstName)
    {
        // Initialisation de la variable Name avec la concaténation des deux paramètres
        $name = $lastName . ' ' . $firstName;
        // On retourne la variable name
        return $name;
    }
?>

<!DOCTYPE html>
<html lang="fr">
<?php require_once('assets\parts\head.php'); ?>
<body>
<?php require_once('assets\parts\barnav.php'); ?>
<h1>Exercice 2</h1>
<!-- Affichage de la valeur retournée par la fonction showName qui prend deux paramètres -->
<p><?php echo showName('René', 'Hallé'); ?></p>
<?php require_once('assets\parts\footer.php'); ?>
</body>
</html>