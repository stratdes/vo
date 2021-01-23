<?php

namespace StraTDeS\VO\Collection;

use StraTDeS\VO\Single\Name;

class NameCollection extends AbstractCollection
{
    protected function itemClass(): string
    {
        return Name::class;
    }
}
