<?php
namespace App\Domain\Service;

use App\Domain\Repository\ProductRepositoryInterface;

class CartService{
   private ProductRepositoryInterface $repo;
   
   private array $items;


   public function __construct(ProductRepositoryInterface $repo)
   {
     $this->repo = $repo;
     if (!isset($session['cart'])) $session['cart'] = [];
        $this->items = &$session['cart'];

        // Any change to $this->items will also change $session['cart'].   
        // And vice versa: changes to $session['cart'] will be reflected in $this->items.
   }

   public function summary(): array{
        $lines=[];
        $total = 0.0;
        
        foreach($this->items as $pid => $qty ){
           $p= $this->repo->find((int)$pid);
           if (!$p) continue;
           $lineTotal =$p->price() * $qty ;
           $total += $lineTotal;
           $lines[] = ['product' => $p, 'qty' => $qty, 'lineTotal' => $lineTotal];
        }

        return ['lines' => $lines, 'total' => round($total, 2)];
   }

   public function add(int $productId, int $qty=1): void{
        if($qty <1) $qty = 1;
        $this->items[$productId]= ($this->items[$productId] ?? 0) + $qty;
        
   }
}

?>