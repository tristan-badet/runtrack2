<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method = "get">
    Nom:    <input type="text" name="nom"><br>
    Prenom: <input type="text" name="prenom"><br>
    Email: <input type="text" name="email"><br>
    <input type="submit" value="Envoyer">
    </form>
    <table>
        <tr>
        <th>Arguments</th>
        <th>Valeurs</th>
        </tr>
        <tr>
           <td>Nom</td> 
           <td><?php echo $_GET["nom"];?></td>
        </tr>
        <tr>
        <td>Prenom</td>
        <td><?php echo $_GET["prenom"];?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?php echo $_GET["email"];?></td>
        </tr>
    </table>
</body>
</html>