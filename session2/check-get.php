<?php
echo  "<h1> the result came from form-get </h1>";
$input_name = htmlspecialchars($_GET['search_name'] ?? 'default') ;
$input_telephone = htmlspecialchars($_GET['search_tel'] ?? 'default');
echo "<h2> hello, $input_name, the number is $input_telephone </h2>";
?>