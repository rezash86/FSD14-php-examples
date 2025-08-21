<?php

require __DIR__. '/../src/Autoloader.php';
\App\Autoloader::register();

use App\Controller\ProductController;
use App\Domain\Service\CartService;
use App\Infrastructure\Repository\InMemoryProductRepository;

$repo = new InMemoryProductRepository();
$cartService = new CartService($repo);

//here we will call the controller (product controller)
$controller = new ProductController($repo, $cartService);

$action = $_GET["action"] ?? 'index';

print_r($_GET["action"] );
switch($action){
    case 'add':
        $controller->add();
        break;
    default:
        $controller->index();
        break;
}

?>