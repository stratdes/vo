<?php

namespace StraTDeS\VO\Tests\Single;

use StraTDeS\VO\Single\Description;
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

    public function testGivenTwoEqualDescriptionsEqualReturnsTrue(): void
    {
        // Arrange
        $description1 = Description::fromValue("foo");
        $description2 = Description::fromValue("foo");

        // Act
        $equal = $description1->equal($description2);

        // Assert
        $this->assertTrue($equal);
    }

    public function testGivenTwoNotEqualDescriptionsEqualReturnsFalse(): void
    {
        // Arrange
        $description1 = Description::fromValue("foo");
        $description2 = Description::fromValue("bar");

        // Act
        $equal = $description1->equal($description2);

        // Assert
        $this->assertFalse($equal);
    }
}
