<?php
namespace App\Domain\Pricing;

class PercentageDiscountStrategy implements DiscountStrategyInterface
{
    public function __construct(private float $percent)
    {
        if ($percent < 0 || $percent > 100) {
            throw new \InvalidArgumentException("Percent must be between 0 and 100");
        }
    }

    public function apply(float $subtotal): float
    {
        return $subtotal * (1 - $this->percent / 100.0);
    }
}
