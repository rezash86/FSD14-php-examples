<?php
namespace App\Domain\Pricing;

class NoDiscountStrategy implements DiscountStrategyInterface
{
    public function apply(float $subtotal): float
    {
        return $subtotal;
    }
}
