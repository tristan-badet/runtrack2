<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=$s, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td {border:2px solid;
        border-collapse: collapse;}
    </style>
</head>
<body>

    <?php
    $str = "On n’est pas le meilleur quand on le croit mais quand on le sait";
    $dic = ["consonnes"=>0, "voyelles"=>0]; 
    //compte le nombre de caractères dans le string
    $i=0;
    while (@$str[$i] != '') {
      $i++;
    }
    for ($x = 0; $x<=$i; $x++) {
        //On regarde chaque caractères si c'est une voyelle, on l'affecte dans le tableau correspondant
        if (@$str[$x] == "a" or @$str[$x] == "e" or @$str[$x] == "i"  or @$str[$x] == "o" or @$str[$x] == "u" or @$str[$x] == "y" or @$str[$x] == "O") {
            $dic["voyelles"]++;
        }elseif (@$str[$x] != " "){
            $dic["consonnes"]++;
        }
    } 
    ?>
    <!-- On place les résultats dans un tableau HTML -->
    <table>
        <tr>
            <th>Consonnes<th>
            <th>Voyelles<th>
        </tr>
        <tr>
            <td><?php echo $dic["consonnes"];?><td>
            <td><?php echo $dic["voyelles"];?><td>
    </table>
</body>
</html>