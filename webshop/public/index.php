<?php
require __DIR__ . '/../src/Autoloader.php';
\App\Autoloader::register();
    //simple home page;

    $content = '<div class="card shadow-sm"><div class="card-body">
<h3 class="mb-3">Welcome to the OOP PHP Shop</h3>
<p>This mini site is an exercise showcasing OOP: interfaces</p>
<p><a class="btn btn-primary" href="products.php">View Products</a></p>
</div></div>';
include __DIR__. '/../views/layout.php'
?>