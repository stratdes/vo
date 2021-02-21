<?php

namespace StraTDeS\VO\Collection;

use StraTDeS\VO\Single\Currency;

class CurrencyCollection extends AbstractCollection
{
    protected function itemClass(): string
    {
        return Currency::class;
    }
}
