<?php
namespace App\Domain\Entity;

use App\Domain\Traits\Timestampable;

abstract class AbstractEntity implements \JsonSerializable
{
    use Timestampable;

    protected ?int $id = null;

    public function __construct(?int $id = null)
    {
        $this->id = $id;
        $this->initTimestamps();
    }

    public function id(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function jsonSerialize(): array
    {
        return [
            'id' => $this->id,
            'createdAt' => $this->createdAt()->format(\DateTimeInterface::ATOM),
        ];
    }
}
