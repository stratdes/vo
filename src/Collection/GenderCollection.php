<?php

namespace StraTDeS\VO\Collection;

use StraTDeS\VO\Single\Gender;

class GenderCollection extends AbstractCollection
{
    protected function itemClass(): string
    {
        return Gender::class;
    }
}
