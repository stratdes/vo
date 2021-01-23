<?php

namespace StraTDeS\VO\Collection;

use StraTDeS\VO\Single\Email;

class EmailCollection extends AbstractCollection
{
    protected function itemClass(): string
    {
        return Email::class;
    }
}
