<?php
$colors = ["red", "green", "blue"];
echo "the second color -> ". $colors[1] . "\n";

// Get the number of elements
echo "the count of array -> " . count($colors) . "\n";

//add elements to array
array_push($colors, "white");
print_r($colors);

//remove the elements from array
array_pop($colors);
print_r($colors);

//remove the element from begining
$removed_color = array_shift($colors);
print_r("removed color -> " . $removed_color. "\n");
print_r($colors);

//combine arrays
//Check if a value exists in array

$person=["name"=> "John", "age"=> 30];
//get all the keys in this array

//get all the values from this data structure

//sort the array

?>