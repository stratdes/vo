<?php

namespace StraTDeS\VO\Single;

class Email
{
    private string $value;

    private function __construct(string $value)
    {
        $this->checkValueIsAValidEmail($value);
        $this->value = $value;
    }

    public static function fromValue(string $value): Email
    {
        return new Email($value);
    }

    public function value(): string
    {
        return $this->value;
    }

    private function checkValueIsAValidEmail(string $value): void
    {
        if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
            throw new \InvalidArgumentException("$value is not a valid email");
        }
    }
}
