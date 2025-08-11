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
$checkStudent=($isStudent ? "yes" : "no");
print_r($checkStudent);
echo "\n";
echo "Is Student :" . ($isStudent ? "yes" : "no") . "\n"; // I use an itenary conditon

$checkStudent=($isStudent ? "is" : "isn't");

print_r($name." is ".$age." yrs old and has ".$height. " ft and ". $checkStudent. " a student");

// please make a sentence with all of the information you put as the values.
// e.x -> Alice is 3o yrs old and has 1.75 height and is a student

// CTRL + / to make comments

// echo "Hello World, $group_name <br> ";
// echo "Year : $year";
// echo "price : $price";
?>