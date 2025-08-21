<?php
namespace App\Controller;

use App\Http\Request;
use App\Http\Response;
use App\Domain\Service\CartService;
use App\Domain\Repository\ProductRepositoryInterface;

class ProductController
{
    public function __construct(
        private CartService $cart,
        private ProductRepositoryInterface $repo   // inject it
    ) {}

    public function index(Request $req): void
    {
        $products = $this->repo->all();          // no reflection
        include __DIR__ . "/../../views/products.php";
    }

    public function add(Request $req): void
    {
        $id  = (int)$req->input('id', 0);
        $qty = (int)$req->input('qty', 1);
        $this->cart->add($id, $qty);
        Response::redirect('products.php');
    }
}
