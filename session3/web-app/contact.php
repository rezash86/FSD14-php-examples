<?php include 'includes/header.php'; ?>

<h2>Contact us </h2>
<form method="POST" action="forms/contact_submit.php">
    Name: <input type="text" name="name" required><br><br>
    Message : <textarea name="message" required></textarea><br><br>
    <input type="submit" value="Send">
</form>
<?php 
include 'includes/footer.php';
?>