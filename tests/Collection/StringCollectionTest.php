<?php

namespace StraTDeS\VO\Tests\Collection;

use PHPUnit\Framework\TestCase;
use StraTDeS\VO\Collection\StringCollection;
use TypeError;

class StringCollectionTest extends TestCas
{
    public function testItShouldThrowTypeErrorException()
    {
        static::expectException(TypeError::class);

        StringCollection::fromArray([1]);
    }

    public function testItShouldCreateAValidVO()
    {
        $stringCollection = StringCollection::fromArray(['Pepe']);

        static::assertEquals(['Pepe'], $stringCollection->toArray());
    }
}
