<?php

namespace StraTDeS\VO;

class Slug
{
    private string $value;

    private function __construct(string $value)
    {
        $this->value = $value;
    }

    public static function fromValue(string $value): Slug
    {
        return new Slug($value);
    }

    public function value(): string
    {
        return $this->value;
    }
}
