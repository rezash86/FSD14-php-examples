<?php
    //fucntions to DRY
    function square($n){
        return $n * $n;
    }

    function printSquare($n){
        print_r(square($n));
    }

    function isEven($n){
        return $n % 2 === 0;
    }

    function checkIsEven($n){
        if (isEven($n)){
            echo 'It is even';
        }
        else{
            echo 'It is not even';
        }
    }

    echo printSquare(4);
    echo "\n";
    $result = square(12);
    print_r($result);

    //create a function here to check if it is even
    
?>
