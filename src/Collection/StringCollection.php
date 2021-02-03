<?php

declare(strict_types=1);

namespace StraTDeS\VO\Collection;

use TypeError;

class StringCollection
{
    /** @var string[] */
    private array $array;

    private function __construct(string ...$array)
    {
        $this->array = $array;
    }

    /**
     * @param array $array
     * @return static
     * @throws TypeError
     */
    public static function fromArray(array $array): self
    {
        return new static(...$array);
    }

    public function toArray(): array
    {
        return $this->array;
    }
}