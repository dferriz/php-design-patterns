<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\AbstractFactory\FornitureExample\VictorianFornitures;

use DesignPatterns\Creational\AbstractFactory\FornitureExample\Chair;
use DesignPatterns\Creational\AbstractFactory\FornitureExample\Traits\VictorianForniture;

final class VictorianChair extends Chair
{
    use VictorianForniture;
}