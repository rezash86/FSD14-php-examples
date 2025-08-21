<?php

namespace App\Controller;

use App\Domain\Repository\ProductRepositoryInterface;
use App\Domain\Service\CartService;

class ProductController{
    
    public function __construct(private ProductRepositoryInterface $repo, private CartService $cart)
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

    public function add(): void{
        $id = $_POST['id'];
        $qty = $_POST['qty'];
        print_r($id);
        $this->cart-> add($id, $qty);
        header("Location: products.php");
    }
}