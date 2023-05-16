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
    function calcule($x = 0,
                    $operator = "",
                    $y = 0
    ){  
            if ($operator == "+"){
                return $x + $y;
            } elseif ($operator == "-"){
                return $x - $y;
            } elseif ($operator == "*"){
                return $x * $y;
            } elseif ($operator == "/"){
                return $x / $y;
            } elseif ($operator == "%"){
                return ($x * $y) * 100;
            }
    }
    echo calcule($x=4, $operator = "/", $y = 7);
?>
</body>
</html>