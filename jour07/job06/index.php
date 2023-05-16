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
    function leetSpeak($str = ""){
        $array = []; //Création d'un tableau
        $resultat = " ";
    //Compte le nombre de caractères dans la string
    $i=0;
    while (@$str[$i] != '') {
      $i++;
    }
    for ($x = 0; $x<=$i; $x++) {
        $array[] = @$str[$x];
    }
    foreach ($array as $value){
        
    };
    leetSpeak("Salut");
    ?>
</body>
</html>