<?php

namespace StraTDeS\VO;

class Money
{
    private int $amount;
    private Currency $currency;

    private function __construct(int $amount, Currency $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    public static function create(int $amount, Currency $currency): Money
    {
        return new self($amount, $currency);
    }

    public function amount(): int
    {
        return $this->amount;
    }

    public function amountFloat(): float
    {
        return (float)($this->amount() / pow(10, $this->currency->config()->decimals()));
    }

    public function currency(): Currency
    {
        return $this->currency;
    }

    public function formatted(string $thousandsSeparator = ',', string $decimalsSeparator = '.'): string
    {
        return $this->currency->value() . ' ' .
            number_format(
                $this->amountFloat(),
                $this->currency->config()->decimals(),
                $decimalsSeparator,
                $thousandsSeparator
            );
    }
}
