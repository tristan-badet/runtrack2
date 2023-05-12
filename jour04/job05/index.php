<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method = "post">
    Username :   <input type="text" name="username"><br>
    Password : <input type="text" name="password"><br>
    <input type="submit" value="Envoyer">
    </form>
    <?php
    if (isset($_POST['username'])){
    $username = $_POST["username"];
    }else{
        $username = "";
    }
    if (isset($_POST['password'])){
    $password = $_POST["password"];
    }else{
        $password = "";
    }
    if ( isset($username) && isset($password)){
    if ($username == "John" || $password == "Rambo") {
        echo "C'est pas ma guerre";
    } else {
        echo "Votre pire cauchemar";
    }
} else {
    echo "";
}
    ?>
</body>
</html>