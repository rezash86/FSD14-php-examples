<?php

namespace App\Controller;
use App\Domain\Service\CartService;

class CartController {


    //dependency injection -> create a service [cartService]
    public function __construct(private CartService $cart)
    {
        
    }



    public function show(){
        //calling a service
        $summary = $this->cart->summary();
        include __DIR__ . "/../../views/cart.php";
    }
}