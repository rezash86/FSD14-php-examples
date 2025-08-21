<?php
namespace App\Domain\Pricing;

interface DiscountStrategyInterface
{
    public function apply(float $subtotal): float;
}
