<?php

$host="localhost";
$user= "root";
$password="!Jac123456*";
$dbname= "login_db";

// connect to db
try{
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
    echo json_encode(['error' => $e->getMessage()]);
    exit;
}

?>