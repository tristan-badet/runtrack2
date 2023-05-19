<?php

$bdd = new PDO ('mysql:host=localhost;dbname=jour09', 'root', 'Bartender');


$requete = $bdd->prepare('SELECT * FROM etudiants');
$requete->execute();
$etudiants = $requete->fetchall();
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
            <th>prenom</th>
            <th>nom</th>
            <th>naissance</th>
            <th>sexe</th>
            <th>email</th>
    <?php
    foreach ($etudiants as $value){ ?>
        <tr>
            <td><?php echo $value['id'] ?></td>
            <td><?php echo $value['prenom'] ?></td>
            <td><?php echo $value['nom'] ?></td>
            <td><?php echo $value['naissance'] ?></td>
            <td><?php echo $value['sexe'] ?></td>
            <td><?php echo $value['email'] ?></td>
        </tr>
    <?php } ?>
    </table>
</body>
</html>

