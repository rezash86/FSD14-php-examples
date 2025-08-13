<?php include 'includes/header.php'; ?>

<h2>GuestBook </h2>
<form method="POST">
    Name: <input type="text" name="name" required><br><br>
    <input type="submit" value="Sign GuestBook">
</form>

<?php
$file = "data/guestbook.txt";

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $name = htmlspecialchars($_POST["name"]);
    file_put_contents($file, $name.PHP_EOL, FILE_APPEND);
}

if(file_exists($file)){
    $entries = file($file);
    echo "<h3>Entries:<h3><ul>";
        foreach($entries as $entry){
            echo "<li>". htmlspecialchars($entry). "</li>";
        }
    echo "</ul>";
}

?>

<?php 
include 'includes/footer.php';
?>