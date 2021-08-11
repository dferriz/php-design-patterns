<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\AbstractFactory\FornitureExample;

use DesignPatterns\Creational\AbstractFactory\FornitureExample\ArtdecoFornitures\ArtdecoChair;
use DesignPatterns\Creational\AbstractFactory\FornitureExample\ArtdecoFornitures\ArtdecoCoffeeTable;
use DesignPatterns\Creational\AbstractFactory\FornitureExample\ArtdecoFornitures\ArtdecoSofa;

final class ArtdecoFornitureFactory implements FornitureFactory
{
    public static function createChair(): Chair
    {
        return new ArtdecoChair();
    }

    public static function createCoffeTable(): CoffeeTable
    {
        return new ArtdecoCoffeeTable();
    }

    public static function createSofa(): Sofa
    {
        return new ArtdecoSofa();
    }

}