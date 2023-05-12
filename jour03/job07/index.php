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
    $str = "Certaines choses changent, et d'autres ne changeront jamais.";
    $array = []; //Création d'un tableau
    //Compte le nombre de caractères dans la string
    $i=0;
    while (@$str[$i] != '') {
      $i++;
    }
    for ($x = 0; $x<=$i; $x++) {
        $array[] = @$str[$x];
    }
    $array[$i] = $array[0];
    for ($z = 0; $z<=$i; $z++) {
        
            @$array[$z] = @$array[$z+1];
        
    }
    for ($y = 0; $y<= $i; $y++) {
        echo $array[$y];
    }
    
    
    ?>
</body>
</html>