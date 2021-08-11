<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\AbstractFactory\FornitureExample;

abstract class CoffeeTable implements Forniture
{
    public function hasLegs(): bool
    {
        return true;
    }
}