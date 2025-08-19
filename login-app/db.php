<?php

$host = "localhost";
$username = "root";
$password = "!Jac123456*";
$database = "login_app";

$conn = mysqli_connect($host, $username, $password, $database);

if(!$conn){
    die("Connection failed". mysqli_connect_error());
}