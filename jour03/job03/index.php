<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=$s, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $str = "I'm sorry Dave I'm afraid I can't do that";
    $array = []; 
    //Je compte le nombre de caractères à l'intérieur de la chaine de caractères.
    $i=0;
    while (@$str[$i] != '') {
      $i++;
    }
    //Avec cette boucle je mets toutes les lettres de la string dans un tableau.
    for ($x = 0; $x<=$i; $x++) {
        $array[] = @$str[$x];
    }
    //Je n'affiche que les voyelles.
    foreach($array as $y) {
        if ($y == "a" or $y =="e" or $y == "i" or $y == "o" or $y == "u" or $y == "y" or $y == "I")  {
            echo "$y";
        }
    }
    ?>
</body>
</html>