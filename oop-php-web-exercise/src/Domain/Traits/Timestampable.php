<?php
namespace App\Domain\Traits;

trait Timestampable
{
    protected \DateTimeImmutable $createdAt;

    public function initTimestamps(): void
    {
        $this->createdAt = new \DateTimeImmutable();
    }

    public function createdAt(): \DateTimeImmutable
    {
        return $this->createdAt;
    }
}
