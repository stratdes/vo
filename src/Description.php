<?php

namespace StraTDeS\VO;

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
}
