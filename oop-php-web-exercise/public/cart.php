<?php
require __DIR__ . '/../src/Autoloader.php';
\App\Autoloader::register();

use App\Http\Request;
use App\Controller\CartController;
use App\Domain\Service\CartService;
use App\Infrastructure\Repository\InMemoryProductRepository;
use App\Domain\Pricing\PercentageDiscountStrategy;

$req = new Request();
$repo = new InMemoryProductRepository();
$pricing = new PercentageDiscountStrategy(12);
$cart = new CartService($repo, $pricing, $_SESSION);
$controller = new CartController($cart);

$action = $_GET['action'] ?? 'show';
switch ($action) {
    case 'remove':
        $controller->remove($req);
        break;
    case 'clear':
        $controller->clear($req);
        break;
    default:
        $controller->show($req);
}
