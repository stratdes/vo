<?php

namespace StraTDeS\VO\Single;

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

class UUIDV1 extends Id
{
    private UuidInterface $id;

    private function __construct(UuidInterface $id)
    {
        $this->id = $id;
    }

    public static function generate(): UUIDV1
    {
        return new static(Uuid::uuid1());
    }

    public function getId(): UuidInterface
    {
        return $this->id;
    }

    public static function fromString(string $string): UUIDV1
    {
        return new static(Uuid::fromString($string));
    }

    public function getHumanReadableId(): string
    {
        return $this->id->toString();
    }
}
