<?php

namespace StraTDeS\VO\Collection;

use StraTDeS\VO\Single\Description;

class DescriptionCollection extends AbstractCollection
{
    protected function itemClass(): string
    {
        return Description::class;
    }
}
