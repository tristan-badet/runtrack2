<?php

$bdd = new PDO ('mysql:host=localhost;dbname=jour09', 'root', 'Bartender');


$requete = $bdd->prepare('SELECT prenom, nom, naissance FROM etudiants WHERE sexe = "Femme"');
$requete->execute();
$etudiantes = $requete->fetchall();
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
            <th>Prenom</th>
            <th>Nom</th>
            <th>Naissance</th>
    <?php
    foreach ($etudiantes as $value){ ?>
        <tr>
            <td><?php echo $value['prenom'] ?></td>
            <td><?php echo $value['nom'] ?></td>
            <td><?php echo $value['naissance'] ?></td>
        </tr>
    <?php } ?>
    </table>
</body>
</html>
