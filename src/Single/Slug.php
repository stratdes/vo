<?php

namespace StraTDeS\VO\Single;

class Slug
{
    private string $value;

    private function __construct(string $value)
    {
        $this->value = $value;
    }

    public static function fromValue(string $value): Slug
    {
        self::checkSlugIsValid($value);

        return new Slug($value);
    }

    protected static function checkSlugIsValid(string $value): void
    {
        if (!preg_match('/^[a-z-0-9]*$/', $value)) {
            throw new \InvalidArgumentException(
                "$value is not a valid slug. Only lowercase, letters, numbers and dashes are allowed."
            );
        }
    }

    public function value(): string
    {
        return $this->value;
    }

    public function equal(Slug $slug): bool
    {
        return $this->value == $slug->value;
    }
}
