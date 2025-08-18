<?php
session_set_cookie_params(10, "/"); 
session_start();
// If the user has not logged in then go to the page login.php
if(!isset($_SESSION["_username"])){
    header("Location: login.php");
    exit;
}
?>

<h2> welcome <?= htmlspecialchars($_SESSION["_username"]) ?> ! </h2>
<p><a href="logout.php">Logout</a></p>