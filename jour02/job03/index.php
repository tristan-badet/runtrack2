
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
    for($number = 1; $number <= 100; $number++)
    switch ($number) {
        case $number == 42:
            echo "La Plateforme_ <br>";
            break;
        case $number >= 0 && $number <= 20:
            echo "<i>$number</i><br>";
            break;
        case $number >= 25 && $number <= 50:
            echo "<u>$number</u><br>";
            break;
        default:
            echo "$number<br>";
    }
    ?>
</body>
</html>