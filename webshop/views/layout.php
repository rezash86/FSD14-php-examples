<?php
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PHP Web Shop</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
  <div class="container">
    <a class="navbar-brand" href="index.php">OOP Shop</a>
    <div>
      <a class="btn btn-outline-light me-2" href="products.php">Products</a>
    </div>
  </div>
</nav>
<main class="container">
    <?php echo $content ?? ''; ?>
</main>
</body>
</html>
