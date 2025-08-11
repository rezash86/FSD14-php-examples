<?php

$group_name = "FSD-14";
$year = 2025;
$price = 99.99;

$name = "Alice";
$age = 30;
$height = 1.75;
$isStudent = false;

echo "Name : $name \n";
echo "Age : $age \n";
echo "Height : $height \n";
$status = ($age >= 18) ? "Adult" : "Minor";
$valueOfStudent=($isStudent ? "yes" : "no");
echo "Is Student :" . ($isStudent ? "yes" : "no") . "\n"; // I use an itenary conditon


// CTRL + / to make comments

// echo "Hello World, $group_name <br> ";
// echo "Year : $year";
// echo "price : $price";
?>