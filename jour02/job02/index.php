
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
    if ($number == 26 or $number == 37 or $number == 88 or $number == 1111 or $number == 3233) {
        echo "<br>";
    }else{
        echo "$number <br>";
    }
    ?>
</body>
</html>