<?php include 'includes/db.php';?>
<?php include 'includes/header.php';?>

<form method="post" action="submit.php">
    Name: <input type="text" name="name" required><br><br>
    Message:<br>
    <textarea name="message" rows="4" cols=30 required></textarea>
    <input type="submit" value="Submit">
</form>

<h2>uploaded messages</h2>
<?php 
$stmt = $pdo->query("SELECT id, name, message, created_at FROM messages ORDER BY created_at DESC");
while($row=$stmt-> fetch()){
    echo "<p><strong>" . htmlspecialchars($row['name']) . "</strong> (" . $row['created_at'] . "):<br>";
    echo nl2br(htmlspecialchars($row['message'])) . "<br>";
    echo "<a href='edit.php?id=" . $row['id'] . "'>Edit</a> | ";
    echo "<a href='delete.php?id=" . $row['id'] . "' onclick='return confirm(\"Delete this message?\")'>Delete</a>";

    echo "</p><hr>";
}