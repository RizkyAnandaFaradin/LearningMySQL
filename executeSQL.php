<?php

function getConnection(): PDO
{
   $host = "localhost";
   $port = 3306;
   $username = "root";
   $database = "belajar_database";
   $password = "";

   return new PDO("mysql:host=$host:$port; dbname=$database", $username, $password);
}


$connection = getConnection();

$sql = <<<SQL
      INSERT INTO customers(id, name, email)
      VALUES('nanda', 'Nanda', 'nanda@gmail.com');
      SQL;
$connection->exec($sql);
$connection = null;
