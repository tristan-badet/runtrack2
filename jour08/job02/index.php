<?php
$cookie_name = "nbvisites";
setcookie($cookie_name,$_COOKIE["nbvisites"] += 1, time() + 60*60*24);  //On définit le cookie
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
//On réinitialise le nombre de visites
     if(isset($_POST["reset"])){
        setcookie($cookie_name, $_COOKIE['nbvisites'] = 0, time() + 60*60*24, "/");
    }
//On affiche le nombre de fois que la page a été visitée.
    if (isset($_COOKIE['nbvisites'])){
        echo "Cette page a été visitée " . $_COOKIE['nbvisites'] . " fois.";
    }
    ?>
    <br>
    <form method="post">
    <input type="submit" value="Reset" name="reset">
</body>
</html>