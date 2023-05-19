<?php

$bdd = new PDO ('mysql:host=localhost;dbname=jour09', 'root', 'Bartender');


$requete = $bdd->prepare('SELECT SUM(capacite) as totCapacite FROM salles');
$requete->execute();
$capacite_total = $requete->fetch();
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
            <th>Capacite totale</th>
        <tr>
            <td><?php echo $capacite_total['totCapacite'];?></td>
        </tr>
    </table>
</body>
</html>

