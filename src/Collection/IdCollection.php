<?php

namespace StraTDeS\VO\Collection;

use StraTDeS\VO\Single\Id;

class IdCollection extends AbstractCollection
{
    protected function itemClass(): string
    {
        return Id::class;
    }
}
