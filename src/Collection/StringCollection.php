<?php

declare(strict_types=1);

namespace StraTDeS\VO\Collection;


use ArrayAccess;
use Countable;
use InvalidArgumentException;
use Iterator;
use StraTDeS\VO\Single\String;
use TypeError;

class StringCollection implements Countable, ArrayAccess, Iterator
{
    protected array $items;
    protected int $position;

    protected function __construct()
    {
        $this->items = [];
        $this->position = 0;
    }

    public static function create(): self
    {
        return new static();
    }

    public function items(): array
    {
        return $this->items;
    }

    public function current(): string
    {
        return $this->items[$this->position];
    }

    public function next(): void
    {
        $this->position++;
    }

    public function key(): int
    {
        return $this->position;
    }

    public function valid(): bool
    {
        return isset($this->items[$this->position]);
    }

    public function rewind(): void
    {
        $this->position = 0;
    }

    public function offsetExists($offset): bool
    {
        return isset($this->items[$offset]);
    }

    public function offsetGet($offset): string
    {
        return $this->items[$offset];
    }

    public function offsetSet($offset, $value): void
    {
        $this->checkValueIsValidForCollection($value);
        $this->checkOffsetIsValidForCollection($offset);

        $this->items[$offset] = $value;
    }

    public function offsetUnset($offset): void
    {
        unset($this->items[$offset]);
    }

    public function count(): int
    {
        return count($this->items);
    }

    protected function checkValueIsValidForCollection($value): void
    {
        if (is_string($value) !== true) {
            throw new TypeError('Provided value has to be string');
        }
    }

    protected function checkOffsetIsValidForCollection($offset): void
    {
        if (is_int($offset) !== true) {
            throw new TypeError('Provided offset has to be int');
        }

        if ($offset < 0) {
            throw new InvalidArgumentException('Provided offset has to be greater than -1');
        }
    }

    public function add($item): self
    {
        $this->checkValueIsValidForCollection($item);

        $this->items[] = $item;

        return $this;
    }
}