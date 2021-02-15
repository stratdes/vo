<?php

namespace StraTDeS\VO\Collection;

use StraTDeS\SharedKernel\Domain\Identity\Id;

class IdCollection extends AbstractCollection
{
    protected function itemClass(): string
    {
        return Id::class;
    }
}
