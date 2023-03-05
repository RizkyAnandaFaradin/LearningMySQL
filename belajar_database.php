<?php
$host = "localhost";
$port = 3306;
$database = "belajar_database";
$username = "root";
$password = "";


try {
   $conn = new PDO("mysql:host=$host:$port ; dbname=$database", $username, $password);
   echo "sukses terkoneksi database" . PHP_EOL;

   $conn = null;
} catch (PDOException $exception) {
   echo "Error terkoneksi database" . PHP_EOL . $exception->getMessage() . PHP_EOL;
}
