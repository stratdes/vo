<?php

namespace StraTDeS\VO\Tests;

use StraTDeS\VO\Description;
use PHPUnit\Framework\TestCase;

class DescriptionTest extends TestCase
{
    public function testGivenAValidDescriptionAValidVOIsReturned(): void
    {
        // Arrange
        $description = "This is a valid description";

        // Act
        $descriptionVO = Description::fromValue($description);

        // Assert
        $this->assertInstanceOf(Description::class, $descriptionVO);
        $this->assertEquals($description, $descriptionVO->value());
    }
}
