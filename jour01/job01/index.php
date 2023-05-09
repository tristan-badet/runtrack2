<!-- Valeurs PHP -->
<?php $str = "LaPlateforme";
$str2 = "Vive";
$str3 = "!"; 
$val = 6;
$myBool = true; ?>



<!-- Affichage -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?php echo "$str2 $str $str3"?>
    <?php echo "<br>";
    echo $val;
    $val+=4;
    echo "<br>";
    echo "$val<br>";
    echo "$myBool<br>";
    $myBool = false;
    echo $myBool;?></p>
</body>
</html>