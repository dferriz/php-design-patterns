<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\AbstractFactory\FornitureExample;

abstract class Sofa implements Forniture
{
    protected $seats;

    public function __construct(int $seats = 1)
    {
        $this->seats = $seats;
    }

    public function hasLegs(): bool
    {
        return true;
    }

    public function seats(): int
    {
        return $this->seats;
    }
}