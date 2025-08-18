<?php
require 'db.php';

header("Content-type: application/json");
$data = json_decode(file_get_contents("php://input"), true); 

$username = $data['username'] ?? null;
$email = $data['email'] ?? null;

if($username && $email){
    //I can create an insert statement
    $stmt = $pdo-> prepare("INSERT INTO users(username, email) VALUES (?, ?)");
    $stmt->execute([$username, $email]);
    echo json_encode(['message' => 'User Created']);
}
else{
    http_response_code(400);
    echo json_encode(["error"=> "Invalid input"]);
}