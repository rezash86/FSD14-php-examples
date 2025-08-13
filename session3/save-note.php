<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $note = trim($_POST["note"]);
        if(!empty($note)){
            //I would like to have the current date
            $entry = date("Y-m-d H:i:s")."-". $note."\n";
            file_put_contents("notes.txt", $entry, FILE_APPEND);
        }
    }

    header("Location: index.php");
    exit;
?>