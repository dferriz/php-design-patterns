<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\AbstractFactory\FornitureExample\VictorianFornitures;

use DesignPatterns\Creational\AbstractFactory\FornitureExample\CoffeeTable;
use DesignPatterns\Creational\AbstractFactory\FornitureExample\Traits\VictorianForniture;

final class VictorianCoffeeTable extends CoffeeTable
{
    use VictorianForniture;
}