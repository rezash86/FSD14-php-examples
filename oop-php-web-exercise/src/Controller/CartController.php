<?php
namespace App\Controller;

use App\Http\Request;
use App\Http\Response;
use App\Domain\Service\CartService;

class CartController
{
    public function __construct(private CartService $cart) {}

    public function show(Request $req): void
    {
        $summary = $this->cart->summary();
        include __DIR__ . "/../../views/cart.php";
    }

    public function remove(Request $req): void
    {
        $id = (int)$req->input('id', 0);
        $this->cart->remove($id);
        Response::redirect('cart.php');
    }

    public function clear(Request $req): void
    {
        $this->cart->clear();
        Response::redirect('cart.php');
    }
}
