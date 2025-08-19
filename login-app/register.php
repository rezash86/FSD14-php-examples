<?php
include 'partials/header.php';
include "partials/navigation.php";

$error="";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $confirm_password = mysqli_real_escape_string($conn, $_POST["confirm_password"]);

    //check if the password and confirm match

    if ($password !== $confirm_password){
        $error = "Password does not match";
    }
    else{
        //check if the user exists
        if(user_exists($conn, $username)){
            $error = "Username already exists, Please choose another one";
        }
        else{
            //real registration
            $password_hashed = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO users(username, password, email) VALUES ('$username', '$password_hashed', '$email')";
             
            if(mysqli_query($conn, $sql)){
                $_SESSION['logged_in'] = true;
                $_SESSION['_username'] = $username;
                header("location: admin.php");
                exit;
            }
        }   
       
    }
}

?>

<div class="container">
    <div class="form-container">
        <form method="POST">
        <h2>Create your Account</h2>

        <?php if($error): ?>
            <p style="color:red">
                <?php echo $error; ?>
            </p>
        <?php endif; ?>

        <label for="username">Username:</label>
        <input value="<?php echo isset($username) ? $username : ''; ?>"  placeholder="Enter your username" type="text" name="username" required>

        <label for="email">Email:</label>
        <input  value="<?php echo isset($email) ? $email : ''; ?>" placeholder="Enter your email"  type="email" name="email" required>

        <label for="password">Password:</label>
        <input placeholder="Enter your password"  type="password" name="password" required>

        <label for="confirm_password">Confirm Password:</label>
        <input  placeholder="Confirm your password" type="password" name="confirm_password" required>

        <input type="submit" value="Register">
        </form>
    </div>
</div>