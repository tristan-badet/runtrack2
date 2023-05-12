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
    //On calcule le nombre de caractères dans la string
    $str = "Les choses que l'on possede finissent par nous posseder";
    $i=0;
    while (@$str[$i] != '') {
      $i++;
    }
    //On remonte la string à partir de la fin et on echo en partant du dernier index à partir du nombre de caractères
    for($x = $i; $x>=0; $x--) {
        echo @$str[$x];
    }
    ?>
</body>
</html>