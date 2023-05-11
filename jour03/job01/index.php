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
    //Tableau contenant tous les nombres
    $array = [
        200,
        204,
        173,
        98,
        171,
        404,
        459,
    ];
    //Condition pour savoir si le nombre est pair ou impair
    foreach($array as $x) {
        if ($x % 2 == 0) {
            echo "$x est pair<br>";  //le nombre est pair
        } else {
            echo "$x est impair<br>"; //le nombre est impair
        }
    }
    ?>
</body>
</html>