<?php
$score = 75;
if($score >= 90){
    echo "Grade A";
}
elseif ($score >= 80){
    echo "Grade B";
}
else{
    echo "Grade C";
}
echo "\nNumbers from 1 to 5 \n";

//loop
for($i = 1; $i <= 5; $i++){
    echo $i . "\n";
}

$array = [1, 2, 3, 17];

foreach ($array as $value) {
    echo "Current element of \$array: $value.\n";
}

$days = ["Mon", "Tue", "Wed"];
foreach($days as $day){
    print_r("Current element of \$days: $day.\n");
}

$user = ["name" => "Joe", "age" => 30, "email" => "joe@example.com"];

foreach($user as $key => $val){
    echo "$key: $val \n";
    echo "$key: $val"."\n";
}

?>