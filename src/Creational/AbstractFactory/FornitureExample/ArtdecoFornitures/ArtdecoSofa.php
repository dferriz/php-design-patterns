<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\AbstractFactory\FornitureExample\ArtdecoFornitures;

use DesignPatterns\Creational\AbstractFactory\FornitureExample\Sofa;
use DesignPatterns\Creational\AbstractFactory\FornitureExample\Traits\ArtdecoForniture;

final class ArtdecoSofa extends Sofa
{
    use ArtdecoForniture;
}