<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\AbstractFactory\FornitureExample\Traits;

use DesignPatterns\Creational\AbstractFactory\FornitureExample\FornitureStyle;

trait ArtdecoForniture
{
    public function style(): FornitureStyle
    {
        return new FornitureStyle(FornitureStyle::ART_DECO);
    }
}