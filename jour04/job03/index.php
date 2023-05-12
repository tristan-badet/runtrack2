<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method = "post">
    Nom:    <input type="text" name="nom"><br>
    Prenom: <input type="text" name="prenom"><br>
    Email: <input type="text" name="email"><br>
    <input type="submit" value="Envoyer">
    </form>
    <?php
    
    if (isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["email"])) {
        echo "Le nombre d’arguments Post envoyé est : 3 ";
    }
    ?>
</body>
</html>