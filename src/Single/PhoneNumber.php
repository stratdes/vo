<?php

namespace StraTDeS\VO\Single;

class PhoneNumber
{
    private string $prefix;
    private string $number;

    private function __construct(string $prefix, string $number)
    {
        $this->prefix = $prefix;
        $this->number = $number;
    }

    public static function create(string $prefix, string $number): PhoneNumber
    {
        $prefix = str_replace([' ', '+'], '', $prefix);
        $number = str_replace(' ', '', $number);
        return new self($prefix, $number);
    }

    public function prefix(): string
    {
        return $this->prefix;
    }

    public function number(): string
    {
        return $this->number;
    }

    public function equal(PhoneNumber $phoneNumber): bool
    {
        return $this->prefix == $phoneNumber->prefix &&
            $this->number == $phoneNumber->number;
    }
}
