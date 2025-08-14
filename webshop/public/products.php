<?php

require __DIR__. '/../src/Autoloader.php';
\App\Autoloader::register();

use App\Controller\ProductController;
use App\Infrastructure\Repository\InMemoryProductRepository;

$repo = new InMemoryProductRepository();
//here we will call the controller (product controller)
$controller = new ProductController($repo);
$controller->index();
?>