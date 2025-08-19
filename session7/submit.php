<?php
include 'includes/db.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name= trim($_POST["name"]);
    $message= trim($_POST["message"]);

    if(!empty($name) && !empty($message)){
        $stmt = $pdo-> prepare("INSERT INTO messages (name, message) VALUES(?, ?)");
        $stmt-> execute([$name, $message]);
    }
}

header("location: index.php");
exit;

?>