
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
    $number = 1;
        while ($number < 1000)
        {
            $divider = 0;
            for($x=1; $x<=$number; $x++){
                if (($number%$x) == 0){
                        $divider++;
                }
            }
            if ($divider<3){
                echo "$number<br>";
            }
            $number = $number+1;
        }   
    ?>
</body>
</html>