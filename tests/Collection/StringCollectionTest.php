<?php

namespace StraTDeS\VO\Tests\Collection;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use StraTDeS\VO\Collection\StringCollection;
use TypeError;

class StringCollectionTest extends TestCase
{
    public function testGivenValidNamesAValidNameCollectionIsReturned(): void
    {
        // Arrange
        $item1 = 'a';
        $item2 = 'b';
        $item3 = 'c';
        $array = [$item1, $item2, $item3];

        // Act
        $collection = StringCollection::create();
        $collection->add($item1);
        $collection->add($item2);
        $collection->add($item3);

        // Assert
        $this->assertInstanceOf(StringCollection::class, $collection);
        $this->assertEquals($item1, $collection[0]);
        $this->assertEquals($item2, $collection[1]);
        $this->assertEquals($item3, $collection[2]);
        $this->assertEquals(
            $array,
            $collection->items()
        );

        $this->assertCount(3, $collection);

        for ($i = 0; $i < 3; $i++) {
            $this->assertEquals($array[$i], $collection[$i]);
        }

        foreach ($collection as $key => $value) {
            $this->assertTrue(is_string($value));
        }
    }

    public function testGivenAValueByOffsetReturnsAValidValue(): void
    {
        // Arrange
        $item1 = 'a';

        // Act
        $collection = StringCollection::create();
        $collection[0] = $item1;

        // Assert
        $this->assertEquals($item1, $collection[0]);
    }

    public function testGivenAnInvalidValueItThrowsAnException(): void
    {
        $this->expectException(TypeError::class);
        $this->expectExceptionMessage('Provided value has to be string');

        $item = 1;

        $collection = StringCollection::create();
        $collection->add($item);
    }

    public function testGivenAnInvalidOffsetItThrowsAnException(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Provided offset has to be greater than -1');

        $item = 'a';

        $collection = StringCollection::create();
        $collection->offsetSet(-1, $item);

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Provided offset has to be greater than -1');

        $item = 'a';

        $collection = StringCollection::create();
        $collection->offsetSet("a", $item);

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Provided offset has to be greater than -1');

        $item = 'a';

        $collection = StringCollection::create();
        $collection->offsetSet(null, $item);


        $this->expectException(TypeError::class);
        $this->expectExceptionMessage('Provided value has to be string');

        $item = null;

        $collection = StringCollection::create();
        $collection->offsetSet(0, $item);
    }
}
