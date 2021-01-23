<?php

namespace StraTDeS\VO\Single;

abstract class Enum
{
    protected $value;

    private function __construct($value)
    {
        $this->checkValueIsValid($value);
        $this->value = $value;
    }

    /**
     * @param $value
     * @return static
     */
    public static function fromValue($value)
    {
        return new static($value);
    }

    /**
     * Returns value.
     *
     * Override this method to strict type your Enum.
     *
     * @return mixed
     */
    public function value()
    {
        return $this->value;
    }

    public abstract function allowedValues(): array;

    /**
     * Checks whether the value is valid for this Enum.
     *
     * Override this method to add other validations.
     *
     * @param $value
     */
    protected function checkValueIsValid($value): void
    {
        if (!in_array($value, $this->allowedValues())) {
            throw new \InvalidArgumentException($this->valueNotValidMessage($value));
        }
    }

    /**
     * Generates the error message.
     *
     * Override this method if the validation is ok but you want a different message.
     *
     * @param $value
     * @return string
     */
    protected function valueNotValidMessage($value): string
    {
        return "$value is not a valid value for this Enum";
    }
}
