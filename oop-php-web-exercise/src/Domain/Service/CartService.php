<?php
namespace App\Domain\Service;

use App\Domain\Entity\Product;
use App\Domain\Repository\ProductRepositoryInterface;
use App\Domain\Pricing\DiscountStrategyInterface;

class CartService
{
    private ProductRepositoryInterface $repo;
    private DiscountStrategyInterface $discount;

    /** @var array<int,int> productId => qty */
    private array $items;

    public function __construct(ProductRepositoryInterface $repo, DiscountStrategyInterface $discount, array &$session)
    {
        $this->repo = $repo;
        $this->discount = $discount;
        if (!isset($session['cart'])) $session['cart'] = [];
        $this->items = &$session['cart'];
    }

    public function add(int $productId, int $qty = 1): void
    {
        if ($qty < 1) $qty = 1;
        $this->items[$productId] = ($this->items[$productId] ?? 0) + $qty;
    }

    public function remove(int $productId): void
    {
        unset($this->items[$productId]);
    }

    public function clear(): void
    {
        $this->items = [];
    }

    /** @return array{lines: array<array{product: Product, qty: int, lineTotal: float}>, subtotal: float, total: float} */
    public function summary(): array
    {
        $lines = [];
        $subtotal = 0.0;
        foreach ($this->items as $pid => $qty) {
            $p = $this->repo->find((int)$pid);
            if (!$p) continue;
            $lineTotal = $p->price() * $qty;
            $subtotal += $lineTotal;
            $lines[] = ['product' => $p, 'qty' => $qty, 'lineTotal' => $lineTotal];
        }
        $total = $this->discount->apply($subtotal);
        return ['lines' => $lines, 'subtotal' => round($subtotal, 2), 'total' => round($total, 2)];
    }

    public static function formatMoney(float $value): string
    {
        return '$' . number_format($value, 2);
    }
}
