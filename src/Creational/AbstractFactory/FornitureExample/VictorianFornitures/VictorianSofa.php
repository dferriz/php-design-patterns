<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\AbstractFactory\FornitureExample\VictorianFornitures;

use DesignPatterns\Creational\AbstractFactory\FornitureExample\Sofa;
use DesignPatterns\Creational\AbstractFactory\FornitureExample\Traits\VictorianForniture;

final class VictorianSofa extends Sofa
{
    use VictorianForniture;
}