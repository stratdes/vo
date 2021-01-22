<?php

namespace StraTDeS\VO\Collection;

use StraTDeS\VO\Single\Currency;

class CurrencyCollection extends AbstractCollection
{
    protected function singleItemClass(): string
    {
        return Currency::class;
    }
}
