<?php

    //handle GET DATA
    if(!empty($_GET['search'])){
        echo "Search Term => " . htmlspecialchars($_GET['search'] ?? '');
        echo "<br>";
    }

    //handle POST DATA
    if(!empty($_POST['userName']) && !empty($_POST['city']) && !empty($_POST['city'] )){
        echo "Username :". htmlspecialchars($_POST['userName']) . " and city : " . htmlspecialchars($_POST['city']);
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET And POST example </title>
    <!-- Bootstrap CSS-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="containter py-5">
    <!-- Form for GET -->
    <h2>Search</h2>
    <form method ="get" action="">
        <input type="text" name="search" placeholder="Type Something">
        <input type="submit" value="Search">
    </form>


    <!-- Form for POST -->
    <h2>Registration</h2>
    <form method ="post" action="">
        <input type="text" name="userName" placeholder="User Name">
        <input type="text" name="city" placeholder="City">
        <input type="text" name="address" placeholder="Address">
        <input type="submit" value="Submit">
    </form>
</body>
</html>
