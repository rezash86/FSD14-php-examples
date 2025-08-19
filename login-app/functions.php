<?php


function is_user_logged_in(){
    return isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] === true;
}

function user_exists($conn, $username){
    $sql = "SELECT * FROM users where username='$username' LIMIT 1";
    $result = mysqli_query($conn, $sql);
    return mysqli_num_rows($result) > 0;
}

?>