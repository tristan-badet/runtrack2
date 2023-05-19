<?php

$bdd = new PDO ('mysql:host=localhost;dbname=jour09', 'root', 'Bartender');


$requete = $bdd->prepare('SELECT SUM(superficie) as totSuperficie FROM etage');
$requete->execute();
$superficie_total = $requete->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Superficie totale</th>
        <tr>
            <td><?php echo $superficie_total['totSuperficie'];?></td>
        </tr>
    </table>
</body>
</html>

