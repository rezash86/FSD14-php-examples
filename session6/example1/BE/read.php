<?php
require 'db.php';

header("Content-Type: application/json");

$stmt = $pdo->query("SELECT * FROM users");
$data = $stmt-> fetchAll(PDO::FETCH_ASSOC);
echo json_encode($data);
?>