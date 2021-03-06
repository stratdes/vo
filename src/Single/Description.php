<?php

namespace StraTDeS\VO\Single;

class Description
{
    private string $value;

    private function __construct(string $value)
    {
        $this->value = $value;
    }

    public static function fromValue(string $value): Description
    {
        return new Description($value);
    }

    public function value(): string
    {
        return $this->value;
    }

    public function equal(Description $description): bool
    {
        return $this->value == $description->value;
    }
}
