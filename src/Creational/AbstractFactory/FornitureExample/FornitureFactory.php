<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\AbstractFactory\FornitureExample;

interface FornitureFactory
{
    public static function createChair(): Chair;

    public static function createCoffeTable(): CoffeeTable;

    public static function createSofa(): Sofa;
}