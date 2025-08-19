<?php
include 'includes/db.php';

$id = $_GET["id"] ?? null;

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name= trim($_POST["name"]);
    $message= trim($_POST["message"]);

       
    $stmt = $pdo-> prepare("UPDATE messages set name=?, message=? where id=?");
    $stmt-> execute([$name, $message, $id ]);

    header("location: index.php");
    
}


$stmt = $pdo->prepare("SELECT name, message FROM messages WHERE id = ?");
$stmt->execute([$id]);
$row = $stmt->fetch();

if(!$row){
    echo "message not found";
}

?>

<?php include 'includes/header.php';?>

<h2>Edit Message</h2>
<form method="post">
    Name: <input type="text" name="name" value="<?= htmlspecialchars($row["name"]) ?>" required><br><br>
    Message:<br>
    <textarea name="message" rows="4" cols=30  required><?= htmlspecialchars($row["message"]) ?></textarea>
    <input type="submit" value="Submit">
</form>