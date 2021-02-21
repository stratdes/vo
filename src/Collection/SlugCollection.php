<?php

namespace StraTDeS\VO\Collection;

use StraTDeS\VO\Single\Slug;

class SlugCollection extends AbstractCollection
{
    protected function itemClass(): string
    {
        return Slug::class;
    }
}
