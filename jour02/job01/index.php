
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
    for( $number = 0; $number <= 1337; $number++)
    if ($number == 42) {
        echo "<b><u>$number</u></b><br>";
    }else {
        echo "$number <br>";
    }
    ?>
</body>
</html>