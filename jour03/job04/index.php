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
    $str = "Dans l'espace, personne ne vous entend crier";
    $i=0;
    while (@$str[$i] != '') {
      $i++;
    }
    print "Il y a $i caractères dans la chaine<br>";
    
    ?>
</body>
</html>