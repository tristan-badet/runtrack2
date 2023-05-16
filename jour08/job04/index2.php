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
if(isset($_POST["prenom"])) {
	setcookie ("prenom",$_POST["prenom"],time()+ 3600);
    echo "Bonjour " . $_POST["prenom"] . " !";
} else {
	header("Location: http://localhost/runtrack2/jour08/job04/index.php");
}
echo '<form method="POST" action="index.php">
    <input type="submit" value="deco"/>
    </form>';
?>

</body>
</html>
 