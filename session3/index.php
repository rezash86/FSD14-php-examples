<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit a note</title>
</head>
<body>
    <h1> Submit a Note </h1>
    <form method="post" action="save-note.php">
        <textarea name="note" rows="4" cols="40" required></textarea> <br> <br>
        <input type="submit" value="Save Note"/>
    </form>

    <h2>Previous Note </h2>
    <?php
        if(file_exists("notes.txt")){
            $notes = file_get_contents("notes.txt");
            echo "<pre>$notes</pre>";
        }
        else{
            echo "<p>No Notes yet </p>";
        }
    ?>
</body>
</html>