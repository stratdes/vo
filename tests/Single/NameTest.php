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
}
