<?php

namespace StraTDeS\VO\Collection;

use StraTDeS\SharedKernel\Domain\Identity\Id;

class IdCollection extends AbstractCollection
{
    protected function itemClass(): string
    {
        return Id::class;
    }

    /** @return string[] */
    public function toStringArray(): array
    {
        return array_map(function (Id $id) {
            return $id->getHumanReadableId();
        }, $this->items);
    }
}
