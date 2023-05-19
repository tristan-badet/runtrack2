<?php

$bdd = new PDO ('mysql:host=localhost;dbname=jour09', 'root', 'Bartender');


$requete = $bdd->prepare('SELECT * FROM salles ORDER BY capacite');
$requete->execute();
$salles_capacite_decroissante = $requete->fetchall();
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
            <th>ID</th>
            <th>nom</th>
            <th>id_etage</th>
            <th>capacite</th>
</tr>
            
    <?php
    foreach ($salles_capacite_decroissante as $value){ ?>
        <tr>
            <td><?php echo $value['id'] ?></td>
            <td><?php echo $value['nom'] ?></td>
            <td><?php echo $value['id_etage'] ?></td>
            <td><?php echo $value['capacite'] ?></td>
            
        </tr>
    <?php } ?>
    </table>
</body>
</html>

