<?php
//here we define how the request is being passed to the controllers
// $authMiddleware = new AuthMiddleware(); -> if we have any middleware
require __DIR__. '/../src/Autoloader.php';
\App\Autoloader::register();

use App\Controller\CartController;
use App\Domain\Service\CartService;
use App\Infrastructure\Repository\InMemoryProductRepository;

$repo = new InMemoryProductRepository();
$cartService = new CartService($repo);
$controller = new CartController($cartService);

$action = $_GET["action"] ?? 'show';

switch($action){
    case 'remove':
        break;
    case 'clear':
        break;
    default:
        $controller -> show();
        break;
}
?>