<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\AbstractFactory\FornitureExample;

use http\Exception\InvalidArgumentException;

final class FornitureStyle
{
    const VICTORIAN = 'victorian';
    const ART_DECO = 'art_deco';

    private $value;

    public function __construct(string $style)
    {
        $reflected = new \ReflectionClass(self::class);

        if (! in_array($style, $reflected->getConstants())) {
            throw new InvalidArgumentException();
        }
        $this->value = $style;
    }

    public function value(): string
    {
        return $this->value;
    }
}