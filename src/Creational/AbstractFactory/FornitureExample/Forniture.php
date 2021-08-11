<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\AbstractFactory\FornitureExample;

interface Forniture
{
    public function style(): FornitureStyle;
}