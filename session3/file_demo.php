<?php

$file_path = "./files/notes.txt";

$content = file_get_contents($file_path);
echo "<p> $content </p>";

echo "<br>Writing to file<br>";

file_put_contents($file_path, "Learning PHP is useful", FILE_APPEND );


$content = file_get_contents($file_path);
echo "<p> $content </p>";

?>