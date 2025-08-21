<?php
namespace App\Domain\Repository;

use App\Domain\Entity\Product;

interface ProductRepositoryInterface
{
    /** @return Product[] */
    public function all(): array;

    public function find(int $id): ?Product;
}
