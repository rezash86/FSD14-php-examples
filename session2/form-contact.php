<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
    <style>
        body { font-family: Arial; padding: 20px; }
        .error { color: red; }
        .success { color: green; }
        form { max-width: 400px; }
        label { display: block; margin-top: 10px; }
        input, textarea { width: 100%; padding: 8px; margin-top: 4px; }
        button { margin-top: 10px; }
    </style>
</head>
<body>

<h2>Contact Form</h2>

<?php
$name = htmlspecialchars($_POST['name'] ?? '');
$email = htmlspecialchars($_POST['email'] ?? '');
$message = htmlspecialchars($_POST['message'] ?? '');
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (empty($_POST['name'])) {
        $errors[] = "Name is required.";
    }
    if (empty($_POST['email'])) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Email format is invalid.";
    }
    if (empty($_POST['message'])) {
        $errors[] = "Message is required.";
    }

    if (empty($errors)) {
        echo "<p class='success'><strong>Hello $name!</strong><br>
        We received your message:<br><em>$message</em><br>
        We'll reach you at: <code>$email</code></p>";
    }
}
?>

<?php if (!empty($errors)): ?>
    <div class="error">
        <ul>
            <?php foreach ($errors as $err): ?>
                <li><?= $err ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>

<form method="post" action="form-contact.php">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="<?= $name ?>" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="<?= $email ?>" required>

    <label for="message">Message:</label>
    <textarea id="message" name="message" rows="4" required><?= $message ?></textarea>

    <button type="submit">Send</button>
</form>

</body>
</html>