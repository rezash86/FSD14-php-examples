<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $language = htmlspecialchars($_POST["language"] ?? '');
        if(!empty($language)){
            echo "<h2>the fav language is $language </h2>";
        }
        else{
             echo "<h2>please fill in the fields </h2>";
        }
    }
?>
