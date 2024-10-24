<?php

// CONECT TO PHP MY ADMIN
$hostname = "localhost";
$username = "root";
$password = "";
$database_name = "buku_tamu";

// CARA KONEKSI KE DATABASE

$db =mysqli_connect($hostname, $username, $password, $database_name);

if ($db->connect_error){
    echo "koneksi database rusak";
    die('db error!');
}