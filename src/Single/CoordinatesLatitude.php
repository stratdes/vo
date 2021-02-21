<?php

namespace StraTDeS\VO\Single;

class CoordinatesLatitude
{
    private float $value;

    private function __construct(float $value)
    {
        $this->checkLatitudeIsValid($value);
        $this->value = $value;
    }

    public static function fromValue(float $value): CoordinatesLatitude
    {
        return new self($value);
    }

    public function value(): float
    {
        return $this->value;
    }

    private function checkLatitudeIsValid(float $value): void
    {
        if ($value > 90 || $value < -90) {
            throw new \InvalidArgumentException("Latitude must be a float number between -90.00 and 90.00.");
        }
    }
}
