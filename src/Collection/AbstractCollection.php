<?php

namespace StraTDeS\VO\Collection;

abstract class AbstractCollection implements \Countable, \ArrayAccess, \Iterator
{
    protected array $items;
    protected int $position;

    protected function __construct()
    {
        $this->items = [];
        $this->position = 0;
    }

    public static function create()
    {
        return new static();
    }

    public function items(): array
    {
        return $this->items;
    }

    public function count()
    {
        return count($this->items);
    }

    public function offsetExists($offset)
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
        if (get_class($value) != $this->itemClass()) {
            throw new \InvalidArgumentException("Provided value is not a valid " . $this->itemClass());
        }
    }

    public function current()
    {
        return $this->items[$this->position];
    }

    public function next()
    {
        $this->position++;
    }

    public function key()
    {
        return $this->position;
    }

    public function valid()
    {
        return isset($this->items[$this->position]);
    }

    public function rewind()
    {
        $this->position = 0;
    }

    public function add($item) {
        $this->checkValueIsValidForCollection($item);

        $this->items[] = $item;

        return $this;
    }

    protected abstract function itemClass(): string;
}
