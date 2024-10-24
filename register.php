<?php
include("service/database.php")

if(isset($_POST["register"])){
    $username =  $_POST["username"]
    $password = $_POST["password"] 

    $sql = "INSERT INTO users (username, password) VALUES 
    ('$username', '$password')"

    if($db->query( $sql)){
        echo "Data Masuk"

    }else{
    echo "regster gagal"
    }
    }


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Form Register!</h3>
    <form action="register.php" method="$_POST">
        <input type="text" name="username">
        <input type="password" name="password">
        <input type="submit" name="register">
    </form>
</body>
</html>