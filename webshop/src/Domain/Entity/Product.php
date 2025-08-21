<?php

namespace App\Domain\Entity;

class Product{

    private int $id;
    private string $name;
    private float $price;

    public function __construct(int $id, string $name, float $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    public function name(): string{
        return $this-> name;
    }

    public function price() : float{
        return $this-> price;
    }

    public function id():int{
        return $this->id;
    }
}


?>