<?php

namespace App\Infrastructure\Repository;

use App\Repository\ProductRepositoryInterface;

class InMemoryProductRepository implements ProductRepositoryInterface{

    public function all() : array {
        return [];
    }
}

?>