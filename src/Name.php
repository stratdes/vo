<?php

namespace StraTDeS\VO;

class Name
{
    private string $value;

    private function __construct(string $value)
    {
        $this->value = $value;
    }

    public static function fromValue(string $value): Name
    {
        return new Name($value);
    }

    public function value(): string
    {
        return $this->value;
    }
}
