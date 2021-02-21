<?php

namespace StraTDeS\VO\Collection;

use StraTDeS\VO\Single\Coordinates;

class CoordinatesCollection extends AbstractCollection
{
    protected function itemClass(): string
    {
        return Coordinates::class;
    }
}
