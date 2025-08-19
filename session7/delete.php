<?php
include 'includes/db.php';

$id = $_GET["id"] ?? null;

if($id){
    $stmt = $pdo-> prepare("DELETE FROM messages where id=?");
    $stmt-> execute([$id]);
}

header("location: index.php");
exit;

?>