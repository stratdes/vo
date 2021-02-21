<?php

namespace StraTDeS\VO\Single;

abstract class GenerableId extends Id
{
    public abstract static function generate(): Id;
}
