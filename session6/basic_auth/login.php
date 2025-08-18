<?php
session_set_cookie_params(10, "/"); 
session_start();
include 'includes/db.php';
$error = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $stmt = $pdo->prepare("SELECT * from users where username= ?");
    $stmt->execute([$username]);
    $user=$stmt->fetch();

    if($user && hash("sha256", $password) === $user["password"]){
        $_SESSION["_username"] = $username;
        header("Location: welcome.php");
        exit;
    }
    else{
        $error = "Invalid UserName/password";
    }
}

?>

<h2>Login</h2>
<form method="post">
    Username : <input type="text" name="username" required><br><br>
    Password : <input type="password" name="password" required><br><br>
    <input type="submit" value="Login"/>
</form>

<?php if ($error) echo "<p style='color :red;'>$error </p>";