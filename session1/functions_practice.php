<?php
    //fucntions to DRY
    function square($n){
        return $n * $n;
    }

    function printSquare($n){
        print_r(square($n));
    }


    echo printSquare(4);
    echo "\n";
    $result = square(12);
    print_r($result);

    //create a function here to check if it is even
?>
