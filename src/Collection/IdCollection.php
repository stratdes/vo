<?php

namespace StraTDeS\VO\Collection;

use StraTDeS\SharedKernel\Domain\Identity\Id;
use StraTDeS\SharedKernel\Tests\Unit\Domain\DomainEvent\IdStub;

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

    /**
     * @param string[] $ids
     * @return self
     */
    public static function fromStringArray(array $ids): self
    {
        /** @var self $idCollection */
        $idCollection = self::create();
        foreach ($ids as $id) {
            $idCollection->add(IdStub::fromString($id));
        }
        return $idCollection;
    }
}
