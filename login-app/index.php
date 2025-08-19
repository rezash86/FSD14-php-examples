<?php
include 'partials/header.php';
include "partials/navigation.php";
?>

<!-- Main Container -->
<div class="container">
    <div class="hero">
        <div class="hero-content">
            <h1>Welcome to our PHP App</h1>
            <p>Securely login and manage your account with us</p>

            <!--we check if the user logged in then we can show these info-->
             <div class="hero-buttons">
                <?php if (!is_user_logged_in()): ?>
                    <a class="btn" href="login.php">Login</a>
                    <a class="btn" href="register.php">Register</a>
                <?php endif; ?>
             </div>
        </div>
    </div>
</div> 

<?php include "partials/footer.php"; ?>