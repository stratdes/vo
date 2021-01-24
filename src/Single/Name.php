<?php

namespace StraTDeS\VO\Single;

class Name
{
    private string $value;

    private function __construct(string $value)
    {
        $this->value = $value;
    }

    public static function fromValue(string $value): Name
    {
        self::checkValueIsAValidName($value);
        return new Name($value);
    }

    private static function checkValueIsAValidName(string $value): void
    {
        if (strlen($value) === 0) {
            throw new \InvalidArgumentException("Name value must have at least one character");
        }
    }

    public function value(): string
    {
        return $this->value;
    }

    public function equal(Name $name): bool
    {
        return $this->value == $name->value;
    }
}
