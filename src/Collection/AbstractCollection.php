<?php

namespace StraTDeS\VO\Collection;

use ArrayAccess;
use Countable;
use InvalidArgumentException;
use Iterator;

abstract class AbstractCollection implements Countable, ArrayAccess, Iterator
{
    protected array $items;
    protected int $position;

    protected function __construct()
    {
        $this->items = [];
        $this->position = 0;
    }

    public static function create(): static
    {
        return new static();
    }

    public function items(): array
    {
        return $this->items;
    }

    public function count(): int
    {
        return count($this->items);
    }

    public function offsetExists($offset): bool
    {
        return isset($this->items[$offset]);
    }

    public function offsetGet($offset)
    {
        return $this->items[$offset];
    }

    public function offsetSet($offset, $value)
    {
        $this->checkValueIsValidForCollection($value);
        $this->items[$offset] = $value;
    }

    public function offsetUnset($offset)
    {
        unset($this->items[$offset]);
    }

    protected function checkValueIsValidForCollection($value): void
    {
        if (get_class($value) != $this->itemClass() && !is_subclass_of($value, $this->itemClass())) {
            throw new InvalidArgumentException("Provided value is not a valid {$this->itemClass()}");
        }
    }

    public function current()
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

    public function add($item): AbstractCollection
    {
        $this->checkValueIsValidForCollection($item);

        $this->items[] = $item;

        return $this;
    }

    abstract protected function itemClass(): string;
}
