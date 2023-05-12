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
        Longueur :  <input type="text" name ="longueur">
        Largeur : <input type="text" name="largeur">
        <input type="submit" value="Construisons la maison!">
    </form>
    <?php
    if (isset($_POST["largeur"])){
        $colonnes = $_POST["largeur"];
    }else{
        $colonnes = "";
    }
    if (isset($_POST["longueur"])){
        $rows = $_POST["longueur"];
    }else{
        $rows = "";
    }
    for ($x=0; $x <$rows; $x++){
        for ($y=0; $y < $colonnes; $y++){
            if (($y==0 or $y == $colonnes-1)and($x ==0 or $x==$rows-1))
            echo "_";
            elseif ($x==0 or $x==$rows-1 )
            echo "_";
            elseif ($y==0 or $y==$colonnes-1)
            echo "|";
            else
            echo " ";
        }
        echo "<br>";
    }
    ?>
</body>
</html>