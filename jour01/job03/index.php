<!-- Valeurs PHP -->

<?php 
$booléen = true;
$entier = 5;
$text = "Salut!";
$décimal = 12.3;
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
            <th>Type</th>
            <th>Nom</th>
            <th>Valeur</th>
        </tr>
        <tr>
            <td><?php echo gettype($booléen)?></td>
            <td><?php echo "booléen"?></td>
            <td><?php echo $booléen?></td>
        </tr>
        <tr>
            <td><?php echo gettype($entier)?></td>
            <td><?php echo "entier"?></td>
            <td><?php echo $entier?></td>
        </tr>
        <tr>
            <td><?php echo gettype($text)?></td>
            <td><?php echo "text"?></td>
            <td><?php echo $text?></td>
        </tr>
        <tr>
            <td><?php echo gettype($décimal)?></td>
            <td><?php echo "décimal"?></td>
            <td><?php echo $décimal?></td>
        </tr>
    </table>
</body>
</html>