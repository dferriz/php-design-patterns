<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\AbstractFactory\FornitureExample\ArtdecoFornitures;

use DesignPatterns\Creational\AbstractFactory\FornitureExample\Chair;
use DesignPatterns\Creational\AbstractFactory\FornitureExample\Traits\ArtdecoForniture;

final class ArtdecoChair extends Chair
{
    use ArtdecoForniture;
}