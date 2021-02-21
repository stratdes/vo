<?php

namespace StraTDeS\VO\Collection;

use StraTDeS\VO\Single\Money;

class MoneyCollection extends AbstractCollection
{
    protected function itemClass(): string
    {
        return Money::class;
    }
}
