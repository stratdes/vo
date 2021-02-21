<?php

namespace StraTDeS\VO\Tests\Single;

use StraTDeS\VO\Single\Name;
use PHPUnit\Framework\TestCase;

class NameTest extends TestCase
{
    public function testGivenAValidNameAValidVOIsReturned(): void
    {
        // Arrange
        $name = "John Smith";

        // Act
        $nameVO = Name::fromValue($name);

        // Assert
        $this->assertInstanceOf(Name::class, $nameVO);
        $this->assertEquals($name, $nameVO->value());
    }

    public function testGivenAnInvalidEmailAnExceptionIsThrown(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("Name value must have at least one character");

        // Arrange
        $name = "";

        // Act
        Name::fromValue($name);
    }

    public function testGivenTwoEqualNamesEqualReturnsTrue(): void
    {
        // Arrange
        $name1 = Name::fromValue("John Smith");
        $name2 = Name::fromValue("John Smith");

        // Act
        $equal = $name1->equal($name2);

        // Assert
        $this->assertTrue($equal);
    }

    public function testGivenTwoNotEqualNamesEqualReturnsFalse(): void
    {
        // Arrange
        $name1 = Name::fromValue("John Smith");
        $name2 = Name::fromValue("William Wallace");

        // Act
        $equal = $name1->equal($name2);

        // Assert
        $this->assertFalse($equal);
    }
}
