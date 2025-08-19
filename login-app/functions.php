<?php


function is_user_logged_in(){
    return isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] === true;
}


?>