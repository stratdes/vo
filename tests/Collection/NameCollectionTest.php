<?php

namespace StraTDeS\VO\Tests\Collection;

use PHPUnit\Framework\TestCase;
use StraTDeS\VO\Collection\NameCollection;
use StraTDeS\VO\Single\Name;

class NameCollectionTest extends TestCase
{
    public function testGivenValidNamesAValidNameCollectionIsReturned(): void
    {
        // Arrange
        $name1 = Name::fromValue("foo");
        $name2 = Name::fromValue("bar");
        $name3 = Name::fromValue("foobar");
        $nameArray = [
            $name1,
            $name2,
            $name3
        ];

        // Act
        $nameCollection = NameCollection::create();
        $nameCollection->add($name1);
        $nameCollection->add($name2);
        $nameCollection->add($name3);

        // Assert
        $this->assertInstanceOf(NameCollection::class, $nameCollection);
        $this->assertEquals($name1, $nameCollection[0]);
        $this->assertEquals($name2, $nameCollection[1]);
        $this->assertEquals($name3, $nameCollection[2]);
        $this->assertEquals(
            $nameArray,
            $nameCollection->items()
        );
        $this->assertEquals(3, count($nameCollection));

        for($i = 0; $i < 3; $i++) {
            $this->assertEquals($nameArray[$i], $nameCollection[$i]);
        }

        foreach($nameCollection as $key => $name) {
            $this->assertInstanceOf(Name::class, $name);
        }
    }

    public function testGivenAValueByOffsetReturnsAValidValue(): void
    {
        // Arrange
        $name1 = Name::fromValue("foo");

        // Act
        $nameCollection = NameCollection::create();
        $nameCollection[0] = $name1;

        // Assert
        $this->assertEquals($name1, $nameCollection[0]);
    }

    public function testGivenAnInvalidValueItThrowsAnException(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("Provided value is not a valid " . Name::class);

        $name1 = new \stdClass();

        $nameCollection = NameCollection::create();
        $nameCollection->add($name1);
    }
}
