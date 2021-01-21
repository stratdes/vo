<?php

namespace StraTDeS\VO\Tests;

use StraTDeS\VO\Name;
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
}
