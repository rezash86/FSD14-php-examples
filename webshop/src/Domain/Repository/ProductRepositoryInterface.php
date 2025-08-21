<?php

namespace App\Domain\Repository;

interface ProductRepositoryInterface{
    
    public function all(): array;

    public function find(int $id);
}