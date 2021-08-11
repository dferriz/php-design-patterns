<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\AbstractFactory\FornitureExample\ArtdecoFornitures;

use DesignPatterns\Creational\AbstractFactory\FornitureExample\CoffeeTable;
use DesignPatterns\Creational\AbstractFactory\FornitureExample\Traits\ArtdecoForniture;

final class ArtdecoCoffeeTable extends CoffeeTable
{
    use ArtdecoForniture;
}