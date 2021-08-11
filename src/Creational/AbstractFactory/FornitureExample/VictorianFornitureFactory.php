<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\AbstractFactory\FornitureExample;

use DesignPatterns\Creational\AbstractFactory\FornitureExample\VictorianFornitures\VictorianChair;
use DesignPatterns\Creational\AbstractFactory\FornitureExample\VictorianFornitures\VictorianCoffeeTable;
use DesignPatterns\Creational\AbstractFactory\FornitureExample\VictorianFornitures\VictorianSofa;

final class VictorianFornitureFactory implements FornitureFactory
{
    public static function createChair(): Chair
    {
        return new VictorianChair();
    }

    public static function createCoffeTable(): CoffeeTable
    {
        return new VictorianCoffeeTable();
    }

    public static function createSofa(): Sofa
    {
        return new VictorianSofa();
    }
}