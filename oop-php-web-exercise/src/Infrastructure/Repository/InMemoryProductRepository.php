<?php
namespace App\Infrastructure\Repository;

use App\Domain\Repository\ProductRepositoryInterface;
use App\Domain\Entity\Product;

class InMemoryProductRepository implements ProductRepositoryInterface
{
    /** @var Product[] */
    private array $products;

    public function __construct()
    {
        $this->products = [
            new Product(1, "Intro to PHP eBook", 9.99),
            new Product(2, "Laravel Cookbook", 19.99),
            new Product(3, "Full-Stack Bundle", 39.00),
        ];
    }

    public function all(): array
    {
        return $this->products;
    }

    public function find(int $id): ?Product
    {
        foreach ($this->products as $p) {
            if ($p->id() === $id) return $p;
        }
        return null;
    }
}
