<?php

namespace StraTDeS\VO;

class CurrencyConfig
{
    private int $iso;
    private int $decimals;

    public function __construct(int $iso, int $decimals)
    {
        $this->iso = $iso;
        $this->decimals = $decimals;
    }

    public function iso(): int
    {
        return $this->iso;
    }

    public function decimals(): int
    {
        return $this->decimals;
    }
}
