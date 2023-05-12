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
    $str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie";
    $array = []; 
    //On récupère le nombre de caractères dans le string
    $i=0;
    while (@$str[$i] != '') {
      $i++;
    }
    //Avec cette boucle je mets toutes les lettres de la string dans un array
    for ($x = 0; $x<=$i-1; $x++) {
        $array[] = $str[$x];
    } // chaque élément du tableau je regarde s'il est modulo de 2 = 0
        for ($z = 0; $z<=i-1; $z++) {    
            if ($z%2 == 0) {
                echo "$str[$z]";    
            }  
        }
    
    ?>
</body>
</html>