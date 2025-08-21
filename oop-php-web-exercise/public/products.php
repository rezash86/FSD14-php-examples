<?php
require __DIR__ . '/../src/Autoloader.php';
\App\Autoloader::register();

use App\Http\Request;
use App\Controller\ProductController;
use App\Domain\Service\CartService;
use App\Infrastructure\Repository\InMemoryProductRepository;
use App\Domain\Pricing\NoDiscountStrategy;

$req = new Request();
$repo = new InMemoryProductRepository();
$pricing = new NoDiscountStrategy();
$cart = new CartService($repo, $pricing, $_SESSION);
$controller = new ProductController($cart, $repo); // pass $repo here

$action = $_GET['action'] ?? 'index';
switch ($action) {
    case 'add':
        $controller->add($req);
        break;
    default:
        $controller->index($req);
}
