<?php

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Login!</h3>
    <form action="login">
        <input type="text" name="username">
        <input type="password" name="password">
        <input type="submit" name="submit">
    </form>
</body>
</html>