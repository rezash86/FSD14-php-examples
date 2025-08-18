<?php

$host="localhost";
$user= "root";
$password="!Jac123456*";
$dbname= "auth_demo";

// connect to db
$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";
$options=[
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];
try{
    $pdo = new PDO($dsn, $user, $password, $options);    
}
catch(PDOException $e){
  die("Connection failed: ". $e->getMessage());
}

?>