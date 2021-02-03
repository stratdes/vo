<?php


namespace StraTDeS\VO\Collection;


use InvalidArgumentException;

class StringCollection
{
    /** @var string[] */
    private array $array;

    private function __construct(array $array)
    {
        $this->assertAllStrings($array);

        $this->array = $array;
    }

    public static function fromArray(array $array): self
    {
        return new static($array);
    }

    public function toArray(): array
    {
        return $this->array;
    }

    private function assertAllStrings(array $array): void
    {
        foreach ($array as $item) {
            if (is_string($item) !== true) {
                throw new InvalidArgumentException("The element $item in the array is not a string");
            }
        }
    }
}