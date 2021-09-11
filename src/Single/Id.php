<?php

namespace StraTDeS\VO\Single;

abstract class Id
{
    public abstract function getId();

    public abstract static function fromString(string $string): static;

    public abstract function getHumanReadableId(): string;
}
