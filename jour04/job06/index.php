<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get">
       Nombre: <input type="text" name="nombre">
       <input type="submit" value="C'est parti!">
    </form>
    <?php
    if (isset($_GET["nombre"])){
        $nombre = $_GET["nombre"];
    }else{
        $nombre = "";
    }
        
        if ((int)$nombre%2 == 0 && (int)$nombre != 0){
            echo "Nombre pair";
        } elseif ((int)$nombre%2 != 0 && (int)$nombre != 0) {
            echo "Nombre impair";
        }else{
            echo "Ce n'est pas un nombre !";
        }
    ?>
</body>
</html>