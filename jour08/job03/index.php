<?php
session_start();
if (!isset($_SESSION["prenoms"])){
$_SESSION["prenoms"] = array(); //On créé le tableau s'il n'est pas déjà créé 
}
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
    <form method="post">
    Prénom : <input type="text" name="noms">
    <input type="submit" value="Envoyer">
    <br>
    <input type="submit" value="Reset" name="Reset">
    <br>
    <?php
//Si on appuie sur le bouton reset, on réinitialise le tableau à vide
    if(isset($_POST["Reset"])){
        $_SESSION["prenoms"] = [];
    }
//S'il y a quelque chose dans l'input, le string est ajouté au tableau session
    if(isset($_POST["noms"])) {
    array_push($_SESSION["prenoms"], $_POST["noms"]);
    }
//Pour chaque valeurs du tableau, on les affiche avec un retour à la ligne à chaque fois pour les rendre plus visibles.
    foreach($_SESSION["prenoms"] as $value){
        echo $value . "<br>";
    }
    ?>
</form>
</body>
</html>