<?php

namespace StraTDeS\VO\Collection;

use StraTDeS\VO\Single\PhoneNumber;

class PhoneNumberCollection extends AbstractCollection
{
    protected function itemClass(): string
    {
        return PhoneNumber::class;
    }
}
