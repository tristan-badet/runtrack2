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
    $str = "Les choses que l'on possede finissent par nous posseder";
    $i=0;
    while (@$str[$i] != '') {
      $i++;
    }
    for($x = $i; $x>=0; $x--) {
        echo @$str[$x];
    }
    ?>
</body>
</html>