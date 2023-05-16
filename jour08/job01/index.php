<?php
session_start();    //On ouvre la session
$_SESSION['nbvisites'] += 1;    //On ajoute 1 à cette session à chaque fois qu'on reload la page
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Pour réinitialiser le nombre de venues sur la page web, on la remet à 0
     if(isset($_POST['reset'])){
        $_SESSION['nbvisites'] = 0;
    }
    //Affichage du nombre de fois que l'on visite la page
    if (isset($_SESSION['nbvisites'])){
        echo "Cette page a été visitée " . $_SESSION['nbvisites'] . " fois.";
    }
    ?>
    <br>
    <form method="post">
    <input type="submit" value="Reset" name="reset">
</form>
</body>
</html>