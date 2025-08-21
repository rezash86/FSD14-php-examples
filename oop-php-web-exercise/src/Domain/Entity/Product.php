<?php
namespace App\Domain\Entity;

class Product extends AbstractEntity
{
    private string $name;
    private float $price;

    public function __construct(int $id, string $name, float $price)
    {
        parent::__construct($id);
        $this->name = $name;
        $this->price = $price;
    }

    public function name(): string { return $this->name; }
    public function price(): float { return $this->price; }

    public function jsonSerialize(): array
    {
        return parent::jsonSerialize() + [
            'name' => $this->name,
            'price' => $this->price,
        ];
    }

    public static function fromArray(array $data): self
    {
        return new self((int)$data['id'], (string)$data['name'], (float)$data['price']);
    }
}
