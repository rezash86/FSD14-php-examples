<?php
 require 'db.php';

header("Content-type: application/json");

$id =$_GET["id"] ?? null;

if($id){
    $stmt = $pdo-> prepare("DELETE FROM users where id=?");
    $stmt-> execute([$id]);
    echo json_encode(['message' => 'User Deleted']);
}
else{
    http_response_code(400);
    echo json_encode(['error' => 'Missing id']);
}