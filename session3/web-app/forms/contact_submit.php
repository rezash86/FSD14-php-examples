<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = htmlspecialchars($_POST["name"]);
        $message = htmlspecialchars($_POST["message"]);
    }

    file_put_contents("../data/messages.txt", "From: $name\nmessage: $message", FILE_APPEND);
    echo "Thank you, $name, Your message has been sent";
?>
<br>
<a href="../contact.php">Back</a>