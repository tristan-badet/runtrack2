<?php

$bdd = new PDO ('mysql:host=localhost;dbname=jour09', 'root', 'Bartender');


$requete = $bdd->prepare('SELECT nom, capacite FROM salles');
$requete->execute();
$nom_et_capacite = $requete->fetchall();
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
            <th>Nom</th>
            <th>Capacite</th>
    <?php
    foreach ($nom_et_capacite as $value){ ?>
        <tr>
            <td><?php echo $value['nom'] ?></td>
            <td><?php echo $value['capacite'] ?></td>
        </tr>
    <?php } ?>
    </table>
</body>
</html>

