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
$a = ["red", "green"];
$b = ["blue", "yellow"];
$merged = array_merge($a, $b);
print_r("the merged array -> ");
print_r($merged);
//Check if a value exists in array
//condition
if(in_array("green", $colors)){
    echo "found green \n";
}

$person=["name"=> "John", "age"=> 30]; //-> associative array
//get all the keys in this array
print_r(array_keys($person));
// Array
// (
//     [0] => name
//     [1] => age
// )


//get all the values from this data structure
print_r(array_values($person));
// Array
// (
//     [0] => John
//     [1] => 30
// )
//sort the array
echo "sorted \n";
//rsort($colors);
sort($colors);
print_r($colors);
?>