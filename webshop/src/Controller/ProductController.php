<?php

namespace App\Controller;

use App\Domain\Repository\ProductRepositoryInterface;

class ProductController{
    
    public function __construct(private ProductRepositoryInterface $repo)
    {
        //dependency injection
        //fetch a list of products
        //by having a repository
        
    }

    public function index(){
        //it will provide me the information of products
        //redirect to the products.php page
        $products = $this->repo->all();
        include __DIR__. '/../../views/products.php';

        // echo "ProductController::index() works!";
    }
}