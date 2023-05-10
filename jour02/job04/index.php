
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
    for($number = 0; $number <= 100; $number++)
    switch ($number) {
        case $number%5 == 0 && $number%3 == 0:
            echo "FizzBuzz<br>";
            break;
        case $number%5 == 0:
            echo "Buzz<br>";
            break;
        case $number%3 == 0:
            echo "Fizz<br>";
            break;
        default:
            echo "$number<br>";
    }
    ?>
</body>
</html>