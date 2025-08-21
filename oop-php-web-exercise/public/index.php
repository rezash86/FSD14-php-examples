<?php
require __DIR__ . '/../src/Autoloader.php';
\App\Autoloader::register();

use App\Http\Request;
use App\Domain\Service\CartService;
use App\Infrastructure\Repository\InMemoryProductRepository;
use App\Domain\Pricing\NoDiscountStrategy;

$req = new Request();
$repo = new InMemoryProductRepository();
$pricing = new NoDiscountStrategy();
$cart = new CartService($repo, $pricing, $_SESSION);

// Simple home page
$content = '<div class="card shadow-sm"><div class="card-body">
<h3 class="mb-3">Welcome to the OOP PHP Shop</h3>
<p>This mini site is an exercise showcasing OOP: interfaces, abstract classes, traits, DI, and strategy pattern.</p>
<p><a class="btn btn-primary" href="products.php">View Products</a></p>
</div></div>';
include __DIR__ . '/../views/layout.php';
