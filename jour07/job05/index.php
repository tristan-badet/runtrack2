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
    function occurences(
        $str = "",
        $char = ""
    ){
        $array = [];
        $compteur = 0;
        $i=0;
        while (@$str[$i] != '') {
        $i++;
        }
        for ($x = 0; $x<=$i; $x++) {
            $array[] = @$str[$x];
        }
        foreach ($array as $value){
            if ($value == $char){
                $compteur++;
            }
        }
        return $compteur;
        
    }
    echo occurences($str="Bonjour", $char = "o");
    ?>
</body>
</html>