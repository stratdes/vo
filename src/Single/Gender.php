<?php

namespace StraTDeS\VO\Single;

class Gender extends Enum
{
    const MALE = 'MALE';
    const FEMALE = 'FEMALE';

    public function value(): string
    {
        return $this->value;
    }

    protected function valueNotValidMessage($value): string
    {
        return "$value is not a valid gender";
    }

    public function allowedValues(): array
    {
        return [
            self::MALE,
            self::FEMALE
        ];
    }
}
