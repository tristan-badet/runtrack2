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
    function bonjour(
        $jour = true
    ){
        if ($jour == true){
            echo "Bonjour";
        } elseif ($jour == false){
            echo "Bonsoir";
        }
    }
    bonjour($jour = false);
    ?>
</body>
</html>